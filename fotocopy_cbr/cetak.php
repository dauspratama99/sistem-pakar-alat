<?php
session_start();
ob_start();
// Panggil koneksi database.php untuk koneksi database
require_once "koneksi.php";
// panggil fungsi untuk format tanggal
include "report/config/fungsi_tanggal.php";
// panggil fungsi untuk format rupiah
include "report/config/fungsi_rupiah.php";

$hari_ini = date("d-m-Y");
$tgl = $_GET['tgl'];
$tgl2 = $_GET['tgl2'];
$id = $_GET['id'];
$kdk = $_GET['kdk'];

$sql1 = mysqli_query($con,"SELECT * FROM tmp_pasien WHERE id = '$id'");
	$data1 = mysqli_fetch_array($sql1);
	$nama = $data1['nama'];

$no = 1;
// fungsi query untuk menampilkan data dari tabel obat
$query = mysqli_query($con, "SELECT * FROM tmp_gejala")
    or die('Ada kesalahan pada query tampil Data Obat: ' . mysqli_error($mysqli));
$count  = mysqli_num_rows($query);
$query2 = mysqli_query($con, "SELECT * FROM analisa_hasil,kerusakan WHERE analisa_hasil.kd_kerusakan=kerusakan.kd_kerusakan AND tanggal BETWEEN '$tgl' AND '$tgl2' order by analisa_hasil.id")
    or die('Ada kesalahan pada query tampil Data Obat: ' . mysqli_error($mysqli));
$ketemu  = mysqli_num_rows($query2);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Bagian halaman HTML yang akan konvert -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>LAPORAN</title>
    <link rel="stylesheet" type="text/css" href="report/laporan.css" />
    <link rel="shortcut icon" href="../../assets/img/icon.png" />
</head>

<body>
    <div id="title">
        <h2>FOTOCOPY CAHAYA</h2>
        Jl. Raya Maninjau Lubuk Basung, Kec.Tj.Raya, Kab.agam, SUMBAR 26471
    </div>
    <hr>
    <div id="judul">
        <h4>Laporan Hasil Diagnosa</h4>
        Tahun : <?php echo date("Y"); ?>
    </div>
    <br>
    <br>
    <div id="isi">
        <table width="100%" border="0.3" cellpadding="0" cellspacing="0" align="center" >
            <thead style="background:#e8ecee">
                <tr class="tr-title">
                    <th height="20" align="center" valign="middle">NO</th>
                    <th height="20" align="center" valign="middle">NAMA</th>
                    <th height="20" align="center" valign="middle">ALAMAT</th>
                    <th height="20" align="center" valign="middle">MERK</th>
                    <th height="20" align="center" valign="middle">JENIS KERUSAKAN</th>
                    <th height="20" align="center" valign="middle">TANGGAL DIAGNOSA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // tampilkan data
                while ($data = mysqli_fetch_assoc($query2)) {
                    echo " <tr>
                        <td width='20' height='13' align='center' valign='middle'>$no</td>
                        <td style='padding-left:5px;' width='70' height='13' align='center'>$data[nama]</td> 
                        <td style='padding-left:5px;' width='80' height='13' align='center'>$data[alamat]</td>
                        <td style='padding-left:5px;' width='60' height='13' align='center'>$data[merk]</td>
                        <td style='padding-left:5px;' width='200' height='13' align='center'>$data[jenis_kerusakan]($data[kd_kerusakan])</td> 
                        <td style='padding-left:5px;' width='100' height='13' align='center'>$data[tanggal]</td> 
                    </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>

        <div id="footer-tanggal">
            Maninjau, <?php echo tgl_eng_to_ind("$hari_ini"); ?>
        </div>
        <div id="footer-jabatan">
            Mengetahui
        </div>

        <div id="footer-nama">
            PIMPINAN
        </div>
    </div>
</body>

</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename = "Laporan.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">' . ($content) . '</page>';
// panggil library html2pdf
// require __DIR__ . '/vendor/autoload.php';
require_once 'report/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

try {
    $html2pdf = new Html2Pdf('P', 'F4', 'en', false, 'ISO-8859-15', array(10, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
} catch (HTML2PDF_exception $e) {
    echo $e;
}

<html>
<head>
<style type="text/css">
p {text-indent:0pt;}
</style>
<script type="text/javascript">
function konfirmasi(id_relasi){
	var kd_hapus=id_relasi;
	var url_str;
	url_str="hapus_relasi.php?id_relasi="+kd_hapus;
	var r=confirm("Yakin ingin menghapus data..?"+kd_hapus);
	if (r==true){   
		window.location=url_str;
		}else{
			//alert("no");
			}
	}
</script>
</head>
<body>
<h2 class="art-postheader">Data Relasi </h2><hr>
<div class="konten">
<?php
//include "inc.connect/connect.php"; 
include "../koneksi.php";
//$kdsakit = $_REQUEST['kdsakit'];
//$kdgejala= $_REQUEST['kd_gejala'];
?>
<form id="form1" name="form1" method="post" action="relasisim.php" enctype="multipart/form-data"><div>
  <table class="tab" width="528" border="0" align="center" cellpadding="4" cellspacing="1" bordercolor="#F0F0F0" bgcolor="#CCCC99">
      <tr bgcolor="#FFFFFF">
        <td>Kode</td>
        <td><label>
        <select name="TxtKdPenyakit" id="TxtKdPenyakit">
          <option value="NULL">[ Jenis Kerusakan ]</option>
          <?php 
	$sqlp = "SELECT * FROM kerusakan ORDER BY kd_kerusakan";
	$qryp = mysqli_query($con,$sqlp) 
		    or die ("SQL Error: ".mysqli_error());
	while ($datap=mysqli_fetch_array($qryp)) {
		if ($datap['kd_kerusakan']==$kdsakit) {
			$cek ="selected";
		}
		else {
			$cek ="";
		}
		echo "<option value='$datap[kd_kerusakan]' $cek>$datap[kd_kerusakan]&nbsp;|&nbsp;$datap[jenis_kerusakan]</option>";
	}
  ?>
        </select>
        </label></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td width="124">Gejala</td>
        <td width="224">
          <select name="TxtKdGejala" id="TxtKdGejala">
            <option value="NULL">[ Daftar Gejala]</option>
            <?php 
	$sqlp = "SELECT * FROM gejala ORDER BY kd_gejala";
	$qryg = mysqli_query($con,$sqlp) 
		    or die ("SQL Error: ".mysqli_error());
	while ($datag=mysqli_fetch_array($qryg)) {
		if ($datag['kd_gejala']==$kdgejala) {
			$cek ="selected";
		}
		else {
			$cek ="";
		}
		echo "<option value='$datag[kd_gejala]' $cek>$datag[kd_gejala]&nbsp;|&nbsp;$datag[gejala]</option>";
	}
  ?>
          </select>
         </td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>Bobot</td>
        <td><select name="txtbobot" id="txtbobot">
        <option value="0">[ Bobot Gejala ]</option>
        <option value="1">1 | Pasti</option>
        <option value="0.8">0.8 | Hampir Pasti</option>
        <option value="0.6">0.6 | Kemungkinan Besar</option>
        <option value="0.4">0.4 | Mungkin</option>
        <option value="0.2">0.2 | Tidak Tahu</option>
        </select></td>
      </tr>
      <tr bgcolor="#FFFFFF">
        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Simpan" /></td>
      </tr>
    </table>
  </div>
</form>
<table width="100%" border="0" cellpadding="4" cellspacing="1" bordercolor="#F0F0F0" >
  <tr>
    <td width="32"><strong>No</strong></td>
    <td width="105"><strong>Gejala</strong></td>
    <td width="535"><strong>Nama Penyakit</strong><span style="float:right; margin-right:25px;"><strong></strong></span></td>
    </tr>
    <?php
    $query=mysqli_query($con,"SELECT relasi.kd_gejala,relasi.kd_kerusakan,kerusakan.kd_kerusakan,kerusakan.jenis_kerusakan AS penyakit FROM relasi,kerusakan WHERE kerusakan.kd_kerusakan=relasi.kd_kerusakan GROUP BY relasi.kd_kerusakan")or die(mysqli_error());
	$no=0;
	while($row=mysqli_fetch_array($query)){
	$idpenyakit=$row['kd_kerusakan'];
	$no++;
	?>
  <tr bgcolor="#FFFFFF" bordercolor="#333333">
    <td valign="top"><?php echo $no;?></td>
    <td valign="top"><?php
    //$query2=mysqli_query("SELECT relasi.kd_gejala,gejala.kd_gejala FROM relasi,gejala WHERE gejala.kd_gejala='$idpenyakit'")or die(mysqli_error());
	//$query2=mysqli_query("SELECT relasi.kd_gejala FROM relasi WHERE relasi.kd_kerusakan='$idpenyakit'")or die(mysqli_error());
	$query2=mysqli_query($con,"SELECT relasi.id_relasi,relasi.kd_gejala,relasi.bobot,relasi.kd_kerusakan,gejala.gejala AS namagejala FROM relasi,gejala WHERE relasi.kd_kerusakan='$idpenyakit' AND gejala.kd_gejala=relasi.kd_gejala")or die(mysqli_error());
	while ($row2=mysqli_fetch_array($query2)){
		$kd_gej=$row2['kd_gejala'];
		$kd_pen=$row2['kd_kerusakan'];
		echo "<table width='600' border='0' cellpadding='4' cellspacing='1' bordercolor='#F0F0F0' bgcolor='#DBEAF5'>";
		echo "<tr bgcolor='#FFFFFF' bordercolor='#333333'>";
		echo "<td width='50'>$row2[kd_gejala]</td>";
		echo "<td width='300'>$row2[namagejala]</td>";
		echo "<td width='50'>$row2[bobot]</td>";
		echo "<td width='20'><a title='Edit Relasi' href='haladmin.php?top=edit_relasi.php&id_relasi=$row2[id_relasi]&kd_kerusakan=$row2[kd_kerusakan]&kd_gejala=$row2[kd_gejala]&bobot=$row2[bobot]'>Edit</a></td>";
		echo "<td width='20'><a title='Hapus Relasi' style='cursor:pointer;' onclick='return konfirmasi($row2[id_relasi])'>Hapus</a></td>";
		echo "</tr>";
		echo "</table>";
		}
	?>      <br /></td>
    <td><?php echo $row['kd_kerusakan'];?>
      &nbsp;|&nbsp;<strong>
      <?php echo $row['penyakit'];?>
      </strong></td>
    </tr><?php } ?>
</table>
</div>
</body>
</html>
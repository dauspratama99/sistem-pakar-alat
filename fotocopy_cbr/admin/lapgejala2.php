<?php 
//include "inc.connect/connect.php";
include "../koneksi.php";
$kdsakit = $_REQUEST['CmbPenyakit'];
$sqlp = "SELECT * FROM kerusakan WHERE kd_kerusakan='$kdsakit' ";
$qryp = mysqli_query($con,$sqlp);
$datap= mysqli_fetch_array($qryp);
$sakit = $datap['jenis_kerusakan'];
?>
<html>
<head>
<title>Tampilan Data Gejala Penyakit</title>
<link href="../images/favicon.png" rel="shortcut icon" />
<link rel="stylesheet" href="../style.css" type="text/css" media="screen" />
</head>
<body>
<div align="left" style="background-color:#CCCC99; width:650;"><b>Jenis Kerusakan : <?php print_r($_POST['CmbPenyakit']);?>
  </b>
</div>
<br>
<div class="CSSTableGenerator">
<table width="650" border="0" align="left" cellpadding="2" cellspacing="1" bgcolor="#99CC99">
  <tr bgcolor="#CCCC99"> 
    <td colspan="3"><b>Daftar Gejala Kerusakan</b> <br>
      <br></td>
  </tr>
  <tr bgcolor="#CCCC99"> 
    <td width="39" align="center"><b>No</b></td>
    <td width="84"><b>Kode</b></td>
    <td width="361"><b>Nama Gejala</b></td>
  </tr>
  <?php 
	$sqlg  = "SELECT gejala.* FROM gejala,relasi ";
	$sqlg .= "WHERE gejala.kd_gejala=relasi.kd_gejala ";
	$sqlg .= "AND  relasi.kd_kerusakan='$kdsakit' ";
	$sqlg .= "ORDER BY gejala.kd_gejala";
	$qryg = mysqli_query($con,$sqlg)or die ("SQL Error".mysqli_error());
	$no=0;
	while ($datag=mysqli_fetch_array($qryg)) {
	$no++;
  ?>
  <tr bgcolor="#FFFFFF"> 
    <td align="center"><?php echo $no; ?></td>
    <td><?php echo $datag['kd_gejala']; ?></td>
    <td><?php echo $datag['gejala']; ?></td>
  </tr>
  <?php
  }
  ?>
   <tr>
  <td colspan="3" bgcolor="#CCCC99"><div align="right"><a href="haladmin.php?top=LapGejala.php">&laquo;&laquo;Kembali</a></div> </td>
</tr>
</table>
</body>
</html>
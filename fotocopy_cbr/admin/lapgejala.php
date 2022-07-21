<?php 
//include "inc.connect/connect.php";
include "../koneksi.php";
//$kdsakit = $_REQUEST['kdsakit'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Halaman Untuk Relasi Gejala Penyakit</title>
</head>
<body>
<h2 class="art-postheader">Laporan Data Gejala</h2><hr>
<form name="form1" method="post" action="haladmin.php?top=lapgejala2.php">
<div class="CSSTableGenerator">
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="2">
<tr bgcolor="#CCCC99" align="center">
  <td colspan="2" align="center" ><b>TAMPILKAN GEJALA PER KERUSAKAN</b></td>
  </tr>
<tr>
  <td width="204" align="right" ><b>Kerusakan :</b></td>
  <td width="305" >
   <select name="CmbPenyakit">
    <option value="NULL">[ Daftar Kerusakan]</option>
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
		echo "<option value='$datap[kd_kerusakan]' $cek>
			  $datap[jenis_kerusakan] ($datap[kd_kerusakan])</option>";
	}
  ?>
  </select></td>
</tr>
<tr > 
  <td align="center" >&nbsp;</td>
  <td ><input type="submit" name="Submit" value="Tampil"></td>
</tr>
</table></div>
</form>
</body>
</html>
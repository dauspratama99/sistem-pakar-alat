<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Penyakit dan solusi</title>
<script type="text/javascript">
$(document).ready(function(){
	$("#kd_kerusakan").focus();
	})
function validasi(form){
	if(form.kd_kerusakan.value==""){
		alert("Masukkan Kode Penyakit..!");
		form.kd_kerusakan.focus(); return false;
		}else if(form.jenis_kerusakan.value==""){
		alert("Masukkan Nama Penyakit..!");
		form.jenis_kerusakan.focus(); return false;
		}else if(form.definisi.value==""){
		alert("Masukkan Definisi Penyakit..!");
		form.definisi.focus(); return false;
		}else if(form.solusi.value==""){
		alert("Masukkan Solusi Penyakit..!");
		form.solusi.focus();return false	
		}
	}
function konfirmasi(kd_kerusakan){
	var kd_hapus=kd_kerusakan;
	var url_str;
	url_str="hpskerusakan.php?kdhapus="+kd_hapus;
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
<h2 class="art-postheader">Data Jenis Kerusakan</h2><hr>
<form name="form3" method="post" onSubmit="return validasi(this);" action="simpankerusakan.php">
<table class="tab" width="700" border="0" cellpadding="2" cellspacing="1" align="center">
  <tr align="center">
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="139">Kode Kerusakan</td>
    <td width="8">:</td>
    <td width="537">
      <input name="kd_kerusakan" type="text" id="kd_kerusakan" size="4" maxlength="4">
</td>
  </tr>
  <tr valign="top">
    <td>Jenis Kerusakan</td>
    <td>:</td>
    <td>
      <input type="text" name="jenis_kerusakan" id="jenis_kerusakan" size="40" maxlength="100">
    </td>
  </tr>
  <tr valign="top">
    <td>Penjelasan</td>
    <td>:</td>
    <td>
      <textarea name="definisi" id="definisi" rows="2" cols="70"></textarea>
    </td>
  </tr>
  <tr valign="top">
    <td>Solusi Kerusakan</td>
    <td>:</td>
    <td>
<textarea name="solusi" id="solusi" rows="2" cols="70"></textarea>    
</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <input name="simpan" type="Submit" id="simpan" value="Simpan">
      <input type="submit" name="Submit" value="Reset">
    </td>
  </tr>
</table>
</form>
<br>
<div class="CSSTableGenerator">
<table id="tabel" width="100%" cellpadding="3" cellspacing="0" border="1" align="center">
  <tr valign="top" bgcolor="#CCCC99">
  	<td width="33"><strong>No.</strong></td>
    <td width="193"><strong>Kode Kerusakan</strong></td>
    <td width="209"><strong>Jenis Kerusakan</strong></td>
	<td width="209"><strong>Penjelasan</strong></td>
    <td width="267"><strong>Solusi Kerusakan</strong></td>
    <td width="50"><strong>Edit</strong></td>
    <td width="58"><strong>Hapus</strong></td>
  </tr>
  <?php
	//include "inc.connect/connect.php";
	//include "../librari/inc.koneksidb.php";
	include "../koneksi.php";
	$sql = "SELECT * FROM kerusakan ORDER BY kd_kerusakan";
	$qry = mysqli_query($con,$sql) or die ("SQL Error".mysqli_error());
	$no=0;
	while ($data = mysqli_fetch_array ($qry)) {
	$no++;
   ?>
  <tr valign="baseline">
 	<td><?php echo $no; ?> </td>
    <td><?php echo $data['kd_kerusakan']; ?></td>
    <td><?php echo $data['jenis_kerusakan']; ?></td>
	<td><?php echo substr($data['definisi'],0,100); ?> <a href=""><strong>>></strong></a></td>
    <td><?php echo substr($data['solusi'],0,100); ?> <a href=""><strong>>></strong></a></td>
    <td><a title="Edit Penyakit" href="edkerusakan.php?kdubah=<?php echo $data['kd_kerusakan'];?>"><img src="image/edit.jpeg" width="16" height="16" border="0"></a></td>
    <td><a title="Hapus Penyakit" style="cursor:pointer;" onclick="return konfirmasi('<?php echo $data['kd_kerusakan'];?>');"><img src="image/hapus.jpeg" width="16" height="16" ></a>
    </td>
  </tr>
  <?php
  } ?>
</table></div>
</body>
</html>
<div class="art-post">
<div class="art-post-body">
<div class="art-post-inner art-article">
<h2 class="art-postheader">Daftar Kerusakan</h2>
<div class="art-postcontent">
<table width="95%" border="0" align="center" cellpadding="2" cellspacing="1" >
  <tr >
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr > 
  </tr>
  <?php 
	$sql = "SELECT * FROM kerusakan ORDER BY kd_kerusakan";
	$qry = mysqli_query($con,$sql) or die ("SQL Error".mysqli_error());
	$no=0;
	while ($data=mysqli_fetch_array($qry)) {
	$no++;
  ?>
  <tr bgcolor="#FFFFFF"> 

    <td><div align="left">
      <div align="left"><?php echo "<h3><em>$data[jenis_kerusakan]</em></h3>"; ?></div>
      <ul>
      	<li>
      	  <label>Jenis Pemeriksaan :</label><p><?php echo "$data[definisi]";?></p></li>
        <li><label>Solusi :</label><p><?php echo "$data[solusi]";?></p>
</li>
      </ul>
      
      </td>
  </tr>
  <?php
  }
  ?>
</table>
</div>
                <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>
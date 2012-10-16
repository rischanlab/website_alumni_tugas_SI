<div id="main"> <a name="TemplateInfo"></a>
    <h1 align="left">Photo Gallery</h1>
    
   <?php
   if(isset($_GET['id_user'])){
			if($_GET['id_user']==$_SESSION['id_user']){
   ?>
   <form action="?page=simpan_photo" enctype="multipart/form-data"  method="post" name="postform">
    <input type="hidden" name="id_user" value="<?php echo $_GET['id_user'];?>" /> 
    <table width="399" border="0">
    <tr>
      <td width="113">Judul Photo</td>
      <td width="1">&nbsp;</td>
      <td width="271"><input type="text" name="judul" size="30"/></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td>&nbsp;</td>
      <td><input type="file" name="photo" size="30"/></td>
  	</tr>
    <tr>
      <td colspan="3"><p></p></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" value="Upload"  onclick="return confirm('Apakah Anda yakin akan upload gambar?')"name="kirim" /></td>
    </tr>
    </table>
  </form>
  	<?php
    	}
	}
	?>
    
    <table width="100%" align="center" border="0">
	<?php 
		
	$view=mysql_query("select * from tbl_photo where id_user='$id_user' order by tanggal_photo desc");	
	while($row=mysql_fetch_array($view)){
		?>
		<tr>
			<td align="right" valign="top">
				  <p class="post-footer align-left"><a href="#" class="comments"><?php echo $row['judul_photo'];?></a> <span class="date"><?php echo $row['tanggal_photo']; ?></span></p>
			</td>
		</tr>
		<tr>
			<td valign="top">
				   <p><a href="gallery/<?php echo $row['photo'];?>" class="info" name="desc-01" title="<?php echo $row['judul_photo'];?>"><img src="./gallery/<?php echo $row['photo'];?>" style="border:none" width="96" height="94" alt="ri32" class="float-left" /></a></p>
			</td>
		</tr>
		<?php
	}
	?> 
    </table> 
    
    <p></p>
    <h1 align="left">Komentar Gallery</h1>
    <form action="?page=proses&mode=komentar" method="post">
        <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>" />
        <input type="hidden" name="id_user" value="<?php echo $_GET['id_user']; ?>" />
        <input type="hidden" name="id_teman" value="<?php echo $_SESSION['id_user']; ?>" />
        
        <table align="center">
        <tr>
            <td><textarea name="pesan" cols="55" rows="5"></textarea></td>
            <td>&nbsp;</td>
            <td valign="top"><input type="submit" value="Kirim" onclick="return confirm('Apakah Anda yakin akan mengirim komntar?')"/></td>
        </tr>
        </table>
	</form>
	<p></p>
    
    <?php 
	$view_pesan=mysql_query("select * from tbl_komentar where id_user='$id_user' order by id_komentar desc");
	
	while($row_pesan=mysql_fetch_array($view_pesan)){
		$id_teman=$row_pesan['id_teman'];
		$view_teman=mysql_fetch_array(mysql_query("select * from tbl_user where id_user='$id_teman'"));
		?>
		<table width="100%" align="center" border="0">
		<tr>
			<td align="right" valign="top">
				  <p class="post-footer align-left"><a href="?page=profil&id_user=<?php echo $id_teman;?>" class="comments"><?php echo $view_teman['nama_depan']."&nbsp;".$view_teman['nama_belakang'];?></a> <span class="date"><?php echo $row_pesan['tanggal_komentar']; ?></span></p>
			</td>
		</tr>
		<tr>
			<td valign="top">
				   <p><a href="?page=profil&id_user=<?php echo $id_teman;?>"><img src="./photo/<?php echo $view_teman['photo'];?>" style="border:none" width="77" height="83" alt="ri32" class="float-left" /></a><?php echo $row_pesan['isi_komentar'];?></p>
			</td>
		</tr>
		</table>
		<?php
	}
	?>
    <p></p>


</div>
<div id="main"> <a name="TemplateInfo"></a>
<h1 align="left">Profil</h1>

<?php
if(isset($_GET['id_user']) && isset($_GET['id_user'])!==""){

	$cek1=mysql_num_rows(mysql_query("select * from tbl_pertemanan where id_user='$_SESSION[id_user]' and id_teman='$_GET[id_user]' and konfirmasi='yes'"));
	$cek2=mysql_num_rows(mysql_query("select * from tbl_pertemanan where id_teman='$_SESSION[id_user]' and id_user='$_GET[id_user]' and konfirmasi='yes'"));
	
	if($cek1==0 && $cek2==0 && $_GET['id_user']!==$_SESSION['id_user']){
		
		?>
		<form action="?page=proses&mode=pertemanan" method="post">
			<input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>" />
			<input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>" />
			<input type="hidden" name="id_teman" value="<?php echo $_GET['id_user']; ?>" />
			
			<table align="center">
			<tr>
				<td><input type="submit" value="Jadikan Teman" onclick="return confirm('Apakah Anda yakin akan menjadi temannya?')"/></td>
			</tr>
			</table>
		</form>
		<?php
	
		
	}else{

		?>
		<form action="?page=proses&mode=pesan" method="post">
			<input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>" />
			<input type="hidden" name="id_user" value="<?php echo $_GET['id_user']; ?>" />
			<input type="hidden" name="id_teman" value="<?php echo $_SESSION['id_user']; ?>" />
			
			<table align="center">
			<tr>
				<td><strong><font color="#666666">Pesan</font>&nbsp;</strong></td>
				<td><input type="text" name="pesan" size="50" /></td>
				<td><input type="submit" value="Kirim" /></td>
			</tr>
			</table>
		</form>
		<?php
	
	}
	
}else{

	?>
	<form action="?page=proses&mode=status" method="post">
		<input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>" />
		<table align="center">
		<tr>
			<td><strong><font color="#666666">Status</font>&nbsp;</strong></td>
			<td><input type="text" name="status" size="50" /></td>
			<td><input type="submit" value="Kirim" /></td>
		</tr>
		</table>
	</form>
	<?php
}
?>


<p align="center"><?php if(isset($_GET['stat'])){ echo $_GET['stat'];}?></p>

<?php 
$view_pesan=mysql_query("select * from tbl_pesan where id_user='$id_user' order by id_pesan desc");

while($row_pesan=mysql_fetch_array($view_pesan)){
	$id_teman=$row_pesan['id_teman'];
	$view_teman=mysql_fetch_array(mysql_query("select * from tbl_user where id_user='$id_teman'"));
	?>
    <table width="100%" align="center" border="0">
    <tr>
        <td align="right" valign="top">
              <p class="post-footer align-left"><a href="?page=profil&id_user=<?php echo $id_teman;?>" class="comments"><?php echo $view_teman['nama_depan']."&nbsp;".$view_teman['nama_belakang'];?></a> <span class="date"><?php echo $row_pesan['tanggal_pesan']; ?></span></p>
        </td>
    </tr>
    <tr>
        <td valign="top">
               <p><a href="?page=profil&id_user=<?php echo $id_teman;?>"><img src="./photo/<?php echo $view_teman['photo'];?>" style="border:none" width="77" height="83" alt="ri32" class="float-left" /></a><?php echo $row_pesan['isi_pesan'];?></p>
        </td>
    </tr>
    </table>
    <?php
}
?>

<?php 
$view=mysql_query("select * from tbl_status status, tbl_user user where status.id_user=user.id_user and status.id_user='$id_user' order by id_status desc");

while($row=mysql_fetch_array($view)){
	?>
    <table width="100%" align="center" border="0">
    <tr>
        <td align="right" valign="top">
              <p class="post-footer align-left"><a href="?page=profil&id_user=<?php echo $row['id_user'];?>" class="comments"><?php echo $row['nama_depan']."&nbsp;".$row['nama_belakang'];?></a> <span class="date"><?php echo $row['tanggal_status']; ?></span></p>
        </td>
    </tr>
    <tr>
        <td valign="top">
               <p><a href="?page=profil&id_user=<?php echo $row['id_user'];?>"><img src="./photo/<?php echo $row['photo'];?>" style="border:none" width="77" height="83" alt="ri32" class="float-left" /></a><?php echo $row['isi_status'];?></p>
        </td>
    </tr>
    </table>
    <?php
}
?>
      
<p>&nbsp;</p>

</div>
<style type="text/css">
<!--
.style1 {color: #666666}
-->
</style>
<div id="main"> <a name="TemplateInfo"></a>
<h1 align="left">Informasi</h1>
    <form action="?page=simpan_account" enctype="multipart/form-data"  method="post" name="postform">
    
    <?php
	$query=mysql_fetch_array(mysql_query("select * from tbl_user where id_user='$id_user'"));
	$nama_depan=$query['nama_depan'];
	$nama_belakang=$query['nama_belakang'];
	$email=$query['email'];
	$kelamin=$query['kelamin'];
	$nim=$query['nim'];
	$tanggal=$query['tanggal_lahir'];
	$tanggalwsd=$query['tgl_wisuda'];
	
	$agama=$query['agama'];
	$status=$query['status'];
	$alamat=$query['alamat'];
	$aktivitas=$query['aktivitas'];
	$posisi=$query['posisi_skrg'];
	$hobi=$query['hobi'];
	
	$pass=$query['password'];
	$foto=$query['photo'];

	?>
    <table width="399" border="0">
    <tr>
      <td width="113"><strong>Nama Depan</strong></td>
      <td width="1">&nbsp;</td>
      <td width="271"><span class="style1"><?php echo $nama_depan; ?></span></td>
    </tr>
      <tr>
      <td width="113"><strong>Nama Belakang</strong></td>
      <td width="1">&nbsp;</td>
      <td width="271"><span class="style1"><?php echo $nama_belakang; ?></span></td>
    </tr>
    <tr>
      <td><strong>Email</strong></td>
      <td>&nbsp;</td>
      <td><span class="style1"><?php echo $email; ?></span></td>
    </tr>
    <tr>
      <td><strong>Kelamin</strong></td>
      <td>&nbsp;</td>
      <td><span class="style1"><?php echo $kelamin; ?></span></td>
    </tr>
	<tr>
      <td><strong>NIM (UIN)</strong></td>
      <td>&nbsp;</td>
      <td><span class="style1"><?php echo $nim ?></span></td>
    </tr>
    <tr>
      <td><strong>Tanggal Lahir</strong></td>
      <td>&nbsp;</td>
	  <td><span class="style1"><?php echo $tanggal; ?></span></td>    
    </tr>
	 <tr>
      <td><strong>Tanggal Wisuda</strong></td>
      <td>&nbsp;</td>
	  <td><span class="style1"><?php echo $tanggalwsd; ?></span></td>    
    </tr>
     <tr>
      <td><strong>Agama</strong></td>
      <td>&nbsp;</td>
      <td><span class="style1"><?php echo $agama; ?></span></td>
    </tr>
    <tr>
      <td><strong>Status</strong></td>
      <td>&nbsp;</td>
      <td><span class="style1"><?php echo $status; ?></span></td>
    </tr>
    <tr>
      <td><strong>Alamat</strong></td>
      <td>&nbsp;</td>
      <td>
        <span class="style1"><?php echo $alamat;?></span>      </td>
    </tr>
    <tr>
      <td><strong>Pekerjaan Saat ini</strong></td>
      <td>&nbsp;</td>
      <td>
        <span class="style1"><?php echo $aktivitas;?></span>      </td>
    </tr>
	<tr>
      <td><strong>Posisi Saat ini</strong></td>
      <td>&nbsp;</td>
      <td>
        <span class="style1"><?php echo $posisi;?></span>      </td>
    </tr>
    <tr>
      <td><strong>Hobi</strong></td>
      <td>&nbsp;</td>
      <td>
        <span class="style1"><?php echo $hobi;?></span>      </td>
    </tr>
    <tr>
      <td colspan="3"><p></p></td>
    </tr>
    </table>
    
  </form>
    <p><br /></p>

</div>

<div id="main"> <a name="TemplateInfo"></a>
    <h1 align="left">Account</h1>
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
    <input type="hidden" name="id_user" value="<?php echo $id_user;?>" />
    <input type="hidden" name="pass" value="<?php echo $pass;?>" />
    <input type="hidden" name="foto" value="<?php echo $foto?>" />
    
    <table width="399" border="0">
	<tr><b>Mohon Untuk di Isi Lengkap</b></tr>
    <tr>
      <td width="113">Nama Depan</td>
      <td width="1">&nbsp;</td>
      <td width="271"><input type="text" name="nama_depan" value="<?php echo $nama_depan; ?>" size="30"/></td>
    </tr>
      <tr>
      <td width="113">Nama Belakang</td>
      <td width="1">&nbsp;</td>
      <td width="271"><input type="text" name="nama_belakang" value="<?php echo $nama_belakang; ?>" size="30"/></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>&nbsp;</td>
      <td><input type="text" name="email" value="<?php echo $email; ?>" size="30"/></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td><i><font color="#CCCCCC">*kosongkan password jika tidak diubah*</font></i></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>&nbsp;</td>
      <td><input type="password" name="password" size="30"/></td>
    </tr>
    <tr>
      <td>Kelamin</td>
      <td>&nbsp;</td>
      <td>
      <select name="kelamin">
        <option value="0">--Silahkan dipilih--
        <option value="pria" <?php if($kelamin=='pria'){ echo "selected='selected'";} ?>>Pria
        <option value="wanita" <?php if($kelamin=='wanita'){ echo "selected='selected'";} ?>>Wanita
      </select>
      </td>
    </tr>
	<tr>
      <td>NIM (UIN)</td>
      <td>&nbsp;</td>
      <td><input type="text" name="nim" value="<?php echo $nim; ?>" size="30"/></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td>&nbsp;</td>
      <td><input type="text" name="tanggal" value="<?php  echo $tanggal;?>" size="25"/> <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="./calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
    </tr>
	<tr>
      <td>Tanggal Wisuda (UIN)</td>
      <td>&nbsp;</td>

      <td><input type="text" name="tanggalwsd" value="<?php  echo $tanggalwsd;?>" size="25"/> <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggalwsd);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="./calender/calender.jpeg" width="34" height="29" border="0" alt=""></a></td>
    </tr>
     <tr>
      <td>Agama</td>
      <td>&nbsp;</td>
      <td>
      <select name="agama">
        <option value="0">--Silahkan dipilih--
        <option value="islam" <?php if($agama=='islam'){ echo "selected='selected'";} ?>>Islam
        <option value="katolik" <?php if($agama=='katolik'){ echo "selected='selected'";} ?>>Katolik
        <option value="protestan" <?php if($agama=='protestan'){ echo "selected='selected'";} ?>>Protestan
        <option value="hindu" <?php if($agama=='hindu'){ echo "selected='selected'";} ?>>Hindu
        <option value="budha" <?php if($agama=='budha'){ echo "selected='selected'";} ?>>Budha
      </select>
      </td>
    </tr>
    <tr>
      <td>Status</td>
      <td>&nbsp;</td>
      <td>
      <select name="status">
        <option value="0">--Silahkan dipilih--
        <option value="lajang" <?php if($status=='lajang'){ echo "selected='selected'";} ?>>Lajang
        <option value="pacaran" <?php if($status=='pacaran'){ echo "selected='selected'";} ?>>Pacaran
        <option value="menikah" <?php if($status=='menikah'){ echo "selected='selected'";} ?>>Menikah
        <option value="lain-lain" <?php if($status=='lain-lain'){ echo "selected='selected'";} ?>>Lain-lain
      </select>
      </td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>&nbsp;</td>
      <td>
      <textarea cols="30" rows="5" name="alamat"><?php echo $alamat;?></textarea>
      </td>
    </tr>
    <tr>
      <td>Pekerjaan Saat ini</td>
      <td>&nbsp;</td>
      <td>
      <textarea cols="30" rows="5" name="aktivitas"><?php echo $aktivitas;?></textarea>
      </td>
    </tr>
	 <tr>
      <td>Posisi Saat ini</td>
      <td>&nbsp;</td>
      <td>
      <textarea cols="30" rows="5" name="posisi"><?php echo $posisi;?></textarea>
      </td>
    </tr>
    <tr>
      <td>Hobi</td>
      <td>&nbsp;</td>
      <td>
      <textarea cols="30" rows="5" name="hobi"><?php echo $hobi;?></textarea>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td><i><font color="#CCCCCC">*kosongkan photo jika tidak diubah : <?php echo $foto;?>*</font></i></td>
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
      <td><input type="submit" value="Simpan"  onclick="return confirm('Apakah Anda yakin akan mengubah account?')"name="kirim" /></td>
    </tr>
    </table>
    
    </form>
    <p><br /></p>

</div>

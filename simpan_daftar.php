<div id="main"> <a name="TemplateInfo"></a>
<?php
if(isset($_POST['kirim'])){

	$nama_depan=ucwords($_POST['nama_depan']);
	$nama_belakang=ucwords($_POST['nama_belakang']);
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$kelamin=$_POST['kelamin'];
	$nim=$_POST['nim'];
	$tanggal=$_POST['tanggal'];
	$tanggalwsd=$_POST['tanggalwsd'];
	
	$query=mysql_query("insert into tbl_user(nama_depan,nama_belakang,email,password,kelamin,nim,tanggal_lahir,tgl_wisuda) 
						values('$nama_depan','$nama_belakang','$email','$password','$kelamin','$nim','$tanggal','$tanggalwsd')");
						
	if($query){
		?>
		<blockquote>
          <p></p>
		  <p>Data Anda berhasil disimpan...silahkan login</p>
		  <p></p>
		</blockquote>
		<?php
	}else{
		echo mysql_query();
	}

}else{
	unset($_POST['kirim']);
}
?>
</div>

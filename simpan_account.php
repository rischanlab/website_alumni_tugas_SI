
<?php
if(isset($_POST['kirim'])){

	$id_user=$_POST['id_user'];
	
	$nama_depan=ucwords($_POST['nama_depan']);
	$nama_belakang=ucwords($_POST['nama_belakang']);
	$email=$_POST['email'];
	$kelamin=$_POST['kelamin'];
	$tanggal=$_POST['tanggal'];
	
	$agama=$_POST['agama'];
	$status=$_POST['status'];
	$alamat=$_POST['alamat'];
	$aktivitas=$_POST['aktivitas'];
	$hobi=$_POST['hobi'];
		
	//exception
	if(empty($_POST['password'])){
		$password=$_POST['pass'];
	}else{
		$password=md5($_POST['password']);
	}
	
	
	if(empty($_FILES['photo']['name'])){
		$photo=$_POST['foto'];
	}else{
		$photo=$_FILES['photo']['name'];
		
		//definisikan variabel file dan alamat file
		$uploaddir='./photo/';
		$alamatfile=$uploaddir.$photo;

		//periksa jika proses upload berjalan sukses
		$upload=move_uploaded_file($_FILES['photo']['tmp_name'],$alamatfile);
	}


	$query=mysql_query("update tbl_user set nama_depan='$nama_depan',nama_belakang='$nama_belakang',email='$email',kelamin='$kelamin',
						tanggal_lahir='$tanggal',agama='$agama',status='$status',alamat='$alamat',aktivitas='$aktivitas',hobi='$hobi',
						password='$password',photo='$photo' where id_user='$id_user'");
						
	if($query){
		?>
		<blockquote>
          <p></p>
		  <p>Data Anda berhasil disimpan...</p>
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
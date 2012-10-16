<div id="main"> <a name="TemplateInfo"></a>
<?php
if(isset($_POST['kirim'])){
	$id_user=$_POST['id_user'];
	$judul=$_POST['judul'];
	$photo=$_FILES['photo']['name'];
	$tanggal=date("Y-m-d");
		
	//definisikan variabel file dan alamat file
	$uploaddir='./gallery/';
	$alamatfile=$uploaddir.$photo;

	//periksa jika proses upload berjalan sukses
	$upload=move_uploaded_file($_FILES['photo']['tmp_name'],$alamatfile);
	
	$query=mysql_query("insert into tbl_photo values('','$id_user','$photo','$judul','$tanggal')");
						
	if($query){
		?>
		<blockquote>
          <p></p>
		  <p>Photo berhasil di upload...<a href="home.php?page=form_photo&id_user=<?php if(isset($_GET['id_user'])){ echo $_GET['id_user']; }else{ echo $_SESSION['id_user'];}?>">lihat Gallert</a></p>
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
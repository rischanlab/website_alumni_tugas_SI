<?php
if($_GET['mode']=='status'){
	$status=$_POST['status'];
	$tanggal=$_POST['tanggal'];
	
	$query=mysql_query("insert into tbl_status values('','$id_user','$status','$tanggal')");
	
	if($query){
		header("Location:?page=profil&stat=Berhasil Input Status");
	}else{
		echo mysql_error();
	}
}

if($_GET['mode']=='pesan'){
	$pesan=$_POST['pesan'];
	$tanggal=$_POST['tanggal'];
	$id_user=$_POST['id_user'];
	$id_teman=$_POST['id_teman'];
	
	$query=mysql_query("insert into tbl_pesan values('','$id_user','$id_teman','$pesan','$tanggal')");
	
	if($query){
		header("Location:?page=profil&id_user=$id_user&stat=Berhasil Input Pesan");
	}else{
		echo mysql_error();
	}
}

if($_GET['mode']=='komentar'){
	$pesan=$_POST['pesan'];
	$tanggal=$_POST['tanggal'];
	$id_user=$_POST['id_user'];
	$id_teman=$_POST['id_teman'];
	
	$query=mysql_query("insert into tbl_komentar values('','$id_user','$id_teman','$pesan','$tanggal')");
	
	if($query){
		header("Location:?page=form_photo&id_user=$id_user&stat=Berhasil Input Komentar");
	}else{
		echo mysql_error();
	}
}

if($_GET['mode']=='pertemanan'){
	$id_user=$_POST['id_user'];
	$id_teman=$_POST['id_teman'];
	
	$query_cek=mysql_query("select * from tbl_pertemanan where id_user='$id_user' and id_teman='$id_teman'");
	$cek=mysql_num_rows($query_cek);
	
	if($cek==0){
	
		$query=mysql_query("insert into tbl_pertemanan values('','$id_user','$id_teman','no')");
		
		if($query){
			header("Location:?page=profil&id_user=$id_teman&stat=Menunggu konfirmasi pertemanan");
		}else{
			echo mysql_error();
		}
		
	}else{
		header("Location:?page=profil&id_user=$id_teman&stat=Harap bersabar, Sedang menunggu konfirmasi pertemanan");
	}
	
}

if($_GET['mode']=='konfirmasi'){
	$id_user=$_POST['id_user'];
	$id_teman=$_POST['id_teman'];
	
	
	$query_cek=mysql_query("select * from tbl_pertemanan where id_user='$id_user' and id_teman='$id_teman'");
	$cek=mysql_num_rows($query_cek);
	
	if($cek){
		
		$query=mysql_query("update tbl_pertemanan set konfirmasi='yes' where id_user='$id_user' and id_teman='$id_teman'");
		
		if($query){
			header("Location:?page=teman&stat=Sudah dikonfirmasi");
		}else{
			echo mysql_error();
		}
		
	}else{
		echo mysql_error();
		//header("Location:?page=teman&stat=Error");
	}
	
}
?>
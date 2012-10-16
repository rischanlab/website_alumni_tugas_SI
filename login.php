<?php
$email=$_POST['email'];
$password=md5($_POST['password']);

$query=mysql_query("select * from tbl_user where email='$email' and password='$password'");
$cek=mysql_num_rows($query);
$row=mysql_fetch_array($query);
$id_user=$row['id_user'];

if($cek){
	$_SESSION['id_user']=$id_user;
	header("Location:home.php");
}else{
	?>
    <div id="main"> <a name="TemplateInfo"></a>
	<blockquote>
	  <p></p>
	  <p><font color="#FF0000">Username atau Password anda salah!!</font>. silahkan ulangi Login</p>
	  <p></p>
	</blockquote>
    </div>
	<?php
}
?>
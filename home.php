<?php session_start();

if(isset($_SESSION['id_user'])){

	include "koneksi.php";
	//include "chat.php";
	
	if(isset($_GET['id_user'])){
		$id_user=$_GET['id_user'];
	}
	
	if(empty($_GET['id_user'])){
		$id_user=$_SESSION['id_user'];
	}
	
	$query=mysql_fetch_array(mysql_query("select * from tbl_user where id_user='$id_user'"));
	$nama_depan=$query['nama_depan'];
	$nama_belakang=$query['nama_belakang'];
	$photo=$query['photo'];
	?>
	
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>

	 <script src="./jsautocomplit/jquery-latest.js"></script>
	  <script type="text/javascript" src="./jsautocomplit/jquery.bgiframe.min.js"></script>
	  <script type="text/javascript" src="./jsautocomplit/jquery.autocomplete.js"></script>
	  <script>
	  $(document).ready(function(){
	 var data = "Core Selectors Attributes Traversing Manipulation CSS Events Effects Ajax Utilities".split(" ");
	$("#cari").autocomplete(data);

	  });
	  </script>

	<title>-- Home -- <?php echo ucwords($nama_depan);?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    
    <script type="text/javascript" src="./jscript/jquery.js"></script>
	<script type="text/javascript" src="./jscript/jquery.bigPicture.js"></script> 
    <script type="text/javascript" src="./jscript/jquer.bigPicture-min.js"></script> 
    <script type="text/javascript" src="./jscript/jquery.bigPicture-pack.js"></script> 
    <script type="text/javascript" src="./jscript/jquery.easing.js"></script>  



    <link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />



    <link rel="stylesheet" type="text/css" href="./css/core.css"/>
    <link rel="stylesheet" type="text/css" href="./css/skin.css"/> 
	<link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
	<link type="text/css" rel="stylesheet" media="all" href="css/screen.css" />
    
	</head>
	<body>
	<div id="wrap">
	  <div id="header">
        <form method="post" id="cari" class="search" action="home.php?page=pencarian">
        <p>
        Nama/Email Teman : <input name="cari" id="cari" class="textbox" type="text" />
        <input name="search" class="button" value="Cari" type="submit" />
        </p>
        </form>
        
<p><img src="images/logouin.png" width="277" height="60" alt="uin" class="float-left" style="border:none" />
	  </div>
	  <div id="menu">

		<ul id="navigation">
		  <li id="current"><a style="height: 2em; line-height: 2em; bottom: 0px;" href="home.php">Home</a></li>
		  <li><a style="height: 2em; line-height: 2em; bottom: 0px;" href="home.php?page=profil">Profil</a></li>
		  <li><a style="height: 2em; line-height: 2em; bottom: 0px;" href="home.php?page=form_account">Account</a></li>
         <li><a style="height: 2em; line-height: 2em; bottom: 0px;"  href="logout.php" onclick="return confirm('Apakah Anda yakin akan keluar?')">Logout</a></li>
		</ul>
	  </div>
	  <div id="sidebar" >
      	<h1><?php echo $nama_depan.'&nbsp;'.$nama_belakang;?></h1>
		<p>
        <img src="./photo/<?php echo $photo;?>" width="100" height="100" style="border:none"/>
        </p>
		<ul class="sidemenu">
        
        <?php
		//echo $_GET['id_user'];
		//echo $_SESSION['id_user'];
		
		if(isset($_GET['id_user'])){
			if($_GET['id_user']!==$_SESSION['id_user']){
				?><li><a href="home.php?page=profil&id_user=<?php if(isset($_GET['id_user'])){ echo $_GET['id_user']; }else{ echo $_SESSION['id_user'];}?>">Dinding</a></li><?php
			}
		}
		?>
        
          <li><a href="home.php?page=info&id_user=<?php if(isset($_GET['id_user'])){ echo $_GET['id_user']; }else{ echo $_SESSION['id_user'];}?>">Info</a></li>
          <li><a href="home.php?page=teman&id_user=<?php if(isset($_GET['id_user'])){ echo $_GET['id_user']; }else{ echo $_SESSION['id_user'];}?>">Teman</a></li>
		  <li><a href="home.php?page=form_photo&id_user=<?php if(isset($_GET['id_user'])){ echo $_GET['id_user']; }else{ echo $_SESSION['id_user'];}?>">Photo</a></li>
		</ul>
	  </div>
      
		<?php 
        if(isset($_GET['page'])){
        	$page=htmlentities($_GET['page']);
        }else{
       		$page="welcome";
        }
        
        $file="$page.php";
        $cek=strlen($page);
        
        if($cek>30 || !file_exists($file) || empty($page)){
        	include ("welcome.php");
        }else{
        	include ($file);
        }
        ?>

	<div id="rightbar">
        <script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#fcf9fc',
      color: '#3cb00e'
    },
    tweets: {
      background: '#fcf9fc',
      color: '#632d63',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('indocoding').start();
</script>
 	</div>
	</div>
	<div id="footer">

	</div>
    <!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
    <iframe width=174 height=189 name="gToday:normal:./calender/agenda.js" id="gToday:normal:./calender/agenda.js" src="./calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
    </iframe>

	<script language="javascript"> 
	$('a.info').bigPicture({
	  'enableInfo': true,
	  'infoPosition': 'top'
	}); 
	</script>


<div>
<code>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chat.js"></script>

<p align ="right">

<a href= "javascript:void(0)" onclick="javascript:chatWith('Kiki')" target="_blank"><img src="photo/kiki.jpg" width="30" height="30" alt="alumni tracer" style="border:none" /></a>
<a href= "javascript:void(0)" onclick="javascript:chatWith('Suparmi')" target="_blank"><img src="photo/suparmi.jpg" width="30" height="30" alt="alumni tracer" style="border:none" /></a>
<a href= "javascript:void(0)" onclick="javascript:chatWith('Rischan')" target="_blank"><img src="photo/android.jpg" width="30" height="30" alt="alumni tracer" style="border:none" /></a>

</p>
</code>
</div>


	  <div id="footer-content">
	    <div id="footer-left"> &copy; Copyright 2011 <strong>SI Team Project</strong>&nbsp; Design by: <a href="http://www.indocoding.com/">indocoding</a> wonten Ngayogyakarta</div>
	  </div>

<script type="text/javascript" src="jquery-bouncing-menu_files/jquery_002.js"></script>
<script type="text/javascript" src="jquery-bouncing-menu_files/jquery001.js"></script>
<script type="text/javascript">
$(function() {

  $('li', '#navigation').each(function() {
  
  
    var $li = $(this);
    var $a = $('a', $li);
    
    $a.hover(function() {
    
      $a.stop(true, true).animate({
        height: '2em',
        lineHeight: '2em',
        bottom: '1em'
      }, 'slow', 'easeOutBounce');
    
    
    
    }, function() {
    
    
      $a.stop(true, true).animate({
        height: '2em',
        lineHeight: '2em',
        bottom: 0
      }, 'slow', 'easeOutBounce');
    
    
    });
  
  
  });

});
</script>






		
	</body>
	</html>

<?php
}else{
	header("Location:index.php?status=denied");
}
?>

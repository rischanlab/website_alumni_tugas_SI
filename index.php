<?php session_start();
include "koneksi.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Kumpoel Bareng Alumni UIN Kalijogo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="images/CitrusIsland.css" type="text/css" />
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">

  <link rel="stylesheet" type="text/css" href="javascript/slider/themes/carbono/jquery.slider.css" />


  <script type="text/javascript" src="javascript/jquery.min.js"></script>
  <script type="text/javascript" src="javascript/slider/jquery.slider.min.js"></script>

  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".slider").slideshow({
        width      :900,
        height     : 140,
        transition : ['barLeft', 'barRight']
      });
    });
  </script>

</head>
<body>




<div id="wrap">
  <div id="header">
	  
    <form method="post" class="search" action="?page=login">
      <p>
        Email <input name="email" class="textbox" type="text" /> 
        Password <input name="password" class="textbox" type="password" />
        <input name="search"  class="button" value="Login" type="submit" />
	
      </p>
    </form>
 

<p><img src="images/logouin.png" width="277" height="60" alt="uin" class="float-left" style="border:none" />

 <!--<h1 id="logo">Alumni<span>UinSukidjo</span></h1> -->
  </div>
  
    <div id="menu">
    <ul id="navigation">
    

	<li id="current"><a style="height: 2em; line-height: 2em; bottom: 0px;" href="index.php">Home</a></li>
	<li><a style="height: 2em; line-height: 2em; bottom: 0px;" href="http://uin-suka.ac.id">Kampus</a></li>
	</ul>
	</div>
    <!--
    <div id="menu">
    <ul>
      <li id="current"><a style="height: 2em; line-height: 2em; bottom: 0px;" href="index.php">Home</a></li>
    </ul>
     </div>
    -->



<div id="sidebar">



    <h1>Selamat Datang</h1>
	<a href="http://www.indocoding.com" target="_blank"><img src="images/android.jpg" width="60" height="60" alt="uin" class="float-left" style="border:none" /></a>
	 <p>For Using Android click here</p><br>
    <p>&quot;Mari bergabung di situs <em><b>Kumpoel Bareng Alumni UIN Kalijogo</b></em> untuk temu kangen bareng-bareng...&quot;</p>
    <p class="align-right">- Admin</p>
    Click Here for Trace Alumni
 	<p align ="center"></p><a href="http://www.indocoding.com" target="_blank"><img src="images/google_map.jpg" width="150" height="130" alt="alumni tracer" style="border:none" /></a></p>

</div>

  
	<?php 
        if(isset($_GET['page'])){
        	$page=htmlentities($_GET['page']);
        }else{
       		$page="form_daftar";
        }
        
        $file="$page.php";
        $cek=strlen($page);
        
        if($cek>30 || !file_exists($file) || empty($page)){
        	include ("form_daftar.php");
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



<center>



<div class="slider">
      <div>

        <img src="assets/coba.jpg" alt=""/>
      </div>
      
      <div>
        <img src="assets/slide_4.jpg" alt=""/>
      </div>
      
      <div>
        <img src="assets/slide_5.jpg" alt=""/>
      </div>
      
      <div>

        <img src="assets/slide_8.jpg" alt=""/>
      </div>
</center>



<div id="footer">




  <div id="footer-content">
    <div id="footer-center"> &copy; Copyright 2011 <strong>SI Team Project</strong>&nbsp; Design by: <a href="http://www.indocoding.com/"> INDOCODING </a>wonten Ngayogyakarta HadiNingrat <br> di Dukung oleh : <a href="http://dinar.indocoding.com" target="_blank">MDI (Masyarakat Dinar Indonesia)</a></div>
  </div>
</div>

<!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
<iframe width=174 height=189 name="gToday:normal:./calender/agenda.js" id="gToday:normal:./calender/agenda.js" src="./calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe


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

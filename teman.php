<div id="main"> <a name="TemplateInfo"></a>

<h1 align="left">Teman-Teman</h1>
<?php 
$view_satu=mysql_query("select * from tbl_pertemanan where id_user='$id_user' and konfirmasi='yes'");
while($row_satu=mysql_fetch_array($view_satu)){
	$id_teman_satu=$row_satu['id_teman'];
	$view_teman_satu=mysql_fetch_array(mysql_query("select * from tbl_user where id_user='$id_teman_satu'"));
	?>
    <table width="100%" align="center" border="0">
    <tr>
        <td align="right" valign="top">
              <p class="post-footer align-left"><a href="?page=profil&id_user=<?php echo $view_teman_satu['id_user'];?>" class="comments"><?php echo $view_teman_satu['nama_depan']."&nbsp;".$view_teman_satu['nama_belakang'];?></a></p>
        </td>
    </tr>
    <tr>
        <td valign="top">
               <p><a href="?page=profil&id_user=<?php echo $view_teman_satu['id_user'];?>"><img src="./photo/<?php echo $view_teman_satu['photo'];?>" style="border:none" width="77" height="83" alt="firefox" class="float-left" /></a></p>
        </td>
    </tr>
    </table>
    <?php
}
?>

<?php 
$view_empat=mysql_query("select * from tbl_pertemanan where id_teman='$id_user' and konfirmasi='yes'");
while($row_empat=mysql_fetch_array($view_empat)){
	$id_teman_empat=$row_empat['id_user'];
	$view_teman_empat=mysql_fetch_array(mysql_query("select * from tbl_user where id_user='$id_teman_empat'"));
	?>
    <table width="100%" align="center" border="0">
    <tr>
        <td align="right" valign="top">
              <p class="post-footer align-left"><a href="?page=profil&id_user=<?php echo $view_teman_empat['id_user'];?>" class="comments"><?php echo $view_teman_empat['nama_depan']."&nbsp;".$view_teman_empat['nama_belakang'];?></a> <font color="#666666"></p>
        </td>
    </tr>
    <tr>
        <td valign="top">
               <p><a href="?page=profil&id_user=<?php echo $view_teman_empat['id_user'];?>"><img src="./photo/<?php echo $view_teman_empat['photo'];?>" style="border:none" width="77" height="83" alt="firefox" class="float-left" /></a></p>
        </td>
    </tr>
    </table>
    <?php
}
?>

<p></p>

<?php
	if(!isset($_GET['id_user']) || $_GET['id_user']==$_SESSION['id_user']){
?>

    <h1 align="left">Minta Pertemanan</h1>
    <p align="center"><?php if(isset($_GET['stat'])){ echo $_GET['stat'];}?></p>
    <?php 
    $view_dua=mysql_query("select * from tbl_pertemanan where id_teman='$id_user' and konfirmasi='no'");
    while($row_dua=mysql_fetch_array($view_dua)){
        $id_user_dua=$row_dua['id_user'];
        $id_teman_dua=$row_dua['id_teman'];
        $view_teman_dua=mysql_fetch_array(mysql_query("select * from tbl_user where id_user='$id_user_dua'"));
        ?>
        <form action="?page=proses&mode=konfirmasi" method="post">
        <input type="hidden" name="id_teman" value="<?php echo $id_teman_dua;?>" />
        <input type="hidden" name="id_user" value="<?php echo $id_user_dua;?>" />
        <table width="100%" align="center" border="0">
        <tr>
            <td align="right" valign="top">
                  <p class="post-footer align-left">
                  <a href="?page=profil&id_user=<?php echo $view_teman_dua['id_user'];?>" class="comments">
                  <?php echo $view_teman_dua['nama_depan']."&nbsp;".$view_teman_dua['nama_belakang'];?></a>
                  </p>	
            </td>
        </tr>
        <tr>
            <td valign="top">
                   <p><a href="?page=profil&id_user=<?php echo $view_teman_dua['id_user'];?>"><img src="./photo/<?php echo $view_teman_dua['photo'];?>" style="border:none" width="77" height="83" alt="firefox" class="float-left" /></a>
                   
                   <input type="submit" value="Konfirmasi" onclick="return confirm('Apakah Anda yakin akan menerima pertemanan?')" />
                   </p>
            </td>
        </tr>
        </table>
        </form>
        <?php
    }
    ?>
      
    <p></p>
    
    <h1 align="left">Menunggu Konfirmasi</h1>
    <?php 
    $view_tiga=mysql_query("select * from tbl_pertemanan where id_user='$id_user' and konfirmasi='no'");
    while($row_tiga=mysql_fetch_array($view_tiga)){
        $id_teman_tiga=$row_tiga['id_teman'];
        $view_teman_tiga=mysql_fetch_array(mysql_query("select * from tbl_user where id_user='$id_teman_tiga'"));
        ?>
        <table width="100%" align="center" border="0">
        <tr>
            <td align="right" valign="top">
                  <p class="post-footer align-left"><a href="?page=profil&id_user=<?php echo $view_teman_tiga['id_user'];?>" class="comments"><?php echo $view_teman_tiga['nama_depan']."&nbsp;".$view_teman_tiga['nama_belakang'];?></a> <font color="#666666">&raquo;Konfirmasi Pertemanan : <?php echo ucwords($row_tiga['konfirmasi']);?></font></p>
            </td>
        </tr>
        <tr>
            <td valign="top">
                   <p><a href="?page=profil&id_user=<?php echo $view_teman_tiga['id_user'];?>"><img src="./photo/<?php echo $view_teman_tiga['photo'];?>" style="border:none" width="77" height="83" alt="firefox" class="float-left" /></a></p>
            </td>
        </tr>
        </table>
        <?php
    }
    ?>


<?php
}
?>
<p>&nbsp;</p>

</div>
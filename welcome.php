<div id="main"> <a name="TemplateInfo"></a>
<h1 align="left">Home [Status Teman]</h1>

<?php 

$view_satu=mysql_query("select * from tbl_pertemanan where id_user='$id_user' and konfirmasi='yes'");
while($row_satu=mysql_fetch_array($view_satu)){
	$id_teman_satu=$row_satu['id_teman'];
	$view_teman_satu=mysql_fetch_array(mysql_query("select * from tbl_user user, tbl_status status where status.id_user='$id_teman_satu' and user.id_user='$id_teman_satu' order by id_status desc"));
	?>
    <table width="100%" align="center" border="0">
    <tr>
        <td align="right" valign="top">
              <p class="post-footer align-left"><a href="?page=profil&id_user=<?php echo $view_teman_satu['id_user'];?>" class="comments"><?php echo $view_teman_satu['nama_depan']."&nbsp;".$view_teman_satu['nama_belakang'];?></a>
              <span class="date"><?php echo $view_teman_satu['tanggal_status']; ?></span>
              </p>
        </td>
    </tr>
    <tr>
        <td valign="top">
               <p><a href="?page=profil&id_user=<?php echo $view_teman_satu['id_user'];?>"><img src="./photo/<?php echo $view_teman_satu['photo'];?>" style="border:none" width="77" height="83" alt="firefox" class="float-left" /></a>
			   <?php echo $view_teman_satu['isi_status'];?></p>
        </td>
    </tr>
    </table>
    <?php
}


 
$view_empat=mysql_query("select * from tbl_pertemanan where id_teman='$id_user' and konfirmasi='yes'");
while($row_empat=mysql_fetch_array($view_empat)){
	$id_teman_empat=$row_empat['id_user'];
	$view_teman_empat=mysql_fetch_array(mysql_query("select * from tbl_status status, tbl_user user where status.id_user='$id_teman_empat' and user.id_user='$id_teman_empat' order by id_status desc"));
	?>
    <table width="100%" align="center" border="0">
    <tr>
        <td align="right" valign="top">
              <p class="post-footer align-left"><a href="?page=profil&id_user=<?php echo $view_teman_empat['id_user'];?>" class="comments"><?php echo $view_teman_empat['nama_depan']."&nbsp;".$view_teman_empat['nama_belakang'];?></a> <font color="#666666">
              <span class="date"><?php echo $view_teman_empat['tanggal_status']; ?></span>
              </p>
        </td>
    </tr>
    <tr>
        <td valign="top">
               <p><a href="?page=profil&id_user=<?php echo $view_teman_empat['id_user'];?>"><img src="./photo/<?php echo $view_teman_empat['photo'];?>" style="border:none" width="77" height="83" alt="firefox" class="float-left" /></a>
			   <?php echo $view_teman_empat['isi_status'];?></p>
        </td>
    </tr>
    </table>
    <?php
}
?>

<p></p>
<p></p>

</div>
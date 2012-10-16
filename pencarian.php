<div id="main"> <a name="TemplateInfo"></a>
<h1 align="left">Pencarian</h1>

<p align="center"><?php if(isset($_GET['stat'])){ echo $_GET['stat'];}?></p>

<?php 
$cari=$_POST['cari'];

$view=mysql_query("select * from tbl_user where nama_depan like '%$cari%' or nama_belakang like '%$cari%' or email='$cari' ");

while($row=mysql_fetch_array($view)){
	?>
    <table width="100%" align="center" border="0">
    <tr>
        <td align="right" valign="top">
              <p class="post-footer align-left"><a href="?page=profil&id_user=<?php echo $row['id_user'];?>" class="comments"><?php echo $row['nama_depan']."&nbsp;".$row['nama_belakang'];?></a></p>
        </td>
    </tr>
    <tr>
        <td valign="top">
               <p><a href="?page=profil&id_user=<?php echo $row['id_user'];?>"><img src="./photo/<?php echo $row['photo'];?>" style="border:none" width="77" height="83" alt="firefox" class="float-left" /></a></p>
        </td>
    </tr>
    </table>
    <?php
}
?>
      
<p>&nbsp;</p>

</div>
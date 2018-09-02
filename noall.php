<?php 

if($_GET["pp"] == 1){
$sql = "select * from item3 where item3_display = '1' and item3_i1 = '".$_GET["seq"]."'";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
}else{
    $sql = "select * from item3 where item3_display = '1' and item3_i2 = '".$_GET["seq"]."'";
    $c1  = mysqli_query($link,$sql);
    $c2  = mysqli_fetch_assoc($c1);   
}
?>

<table width="90%" border="1" align="center" cellpadding="5" cellspacing="0">
<?php do{ ?>
  <tr>
    <td rowspan="4" align="center" valign="middle"><a href='index.php?do=itdata&seq=<?=$c2["item3_seq"]?>'><img src="img/<?=$c2["item3_img"]?>" width="150px" height="150px"></a> </td>
    <td width="50%" align="center"><?=$c2["item3_txt"]?></td>
  </tr>
  <tr>
    <td width="50%" align="left">價格:<?=$c2["item3_price"]?><a href ='buyapi.php?seq=<?=$c2["item3_seq"]?>'><img src="img/0402.jpg"></a></td>
  </tr>
  <tr>
    <td width="50%" align="left">規格:<?=$c2["item3_type"]?></td>
  </tr>
  <tr>
    <td width="50%" align="left">簡介:<?=nl2br($c2["item3_con"])?></td>
  </tr>
  <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
</table>
<?php
include_once("head.php");

if(empty($_SESSION["consumer"])){
    echo "<script>document.location.href='index.php?do=login'</script>";
}  

$sql = "select * from buycar,item3 where buycar_acc = '".$_SESSION["consumer"]."' and buycar_i3 = item3_seq";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
$row = mysqli_num_rows($c1);
if($row < 1){
    echo "購物車是空的";
}else{
?>

<?=$_SESSION["consumer"]?>的購物車
<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td width="5%" align="center">編號</td>
    <td width="30%" align="center">商品名稱</td>
    <td width="5%" align="center">數量</td>
    <td width="14%" align="center">庫存量</td>
    <td width="14%" align="center">單價</td>
    <td width="14%" align="center">小計</td>
    <td width="14%" align="center">刪除</td>
  </tr>
  <?php do{ ?>
  <tr>
    <td width="5%" align="center"><?=$c2["item3_seq"]?></td>
    <td width="30%" align="center"><?=$c2["item3_txt"]?></td>
    <td width="5%" align="center"><?=$c2["buycar_hm"]?></td>
    <td width="14%" align="center"><?=$c2["item3_hm"]?></td>
    <td width="14%" align="center"><?=$c2["item3_price"]?></td>
    <td width="14%" align="center"><?php echo $c2["buycar_hm"]*$c2["item3_price"] ?></td>
    <td width="14%" align="center"><a href='delete.php?table=buycar&seq=<?=$c2["buycar_seq"]?>'><img src="img/0415.jpg"></a></td>
  </tr>
  <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
  <tr>
    <td colspan="7" align="center" valign="middle"><a href='index.php'><img src="img/0411.jpg"></a><a href='index.php?do=go'><img src="img/0412.jpg"></a></td>
  </tr>
</table>









<?php } ?>
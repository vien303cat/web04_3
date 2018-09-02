<?php 
if(!empty($_POST["upup"])){
    if($_POST["upup"] == 1){
        $sql = "update item3 set item3_display = '1' where item3_seq = '".$_POST["seq"]."' ";
        mysqli_query($link,$sql);
    }else{
        $sql = "update item3 set item3_display = '0' where item3_seq = '".$_POST["seq"]."' ";
        mysqli_query($link,$sql); 
    }
}


$sql = "select * from item3";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td colspan="4" align="center" valign="middle">商品管理</td>
  </tr>
  <tr>
    <td colspan="4" align="center" valign="middle"><input type="button" value="新增商品" onclick="document.location.href='admin.php?do=admin&redo=itemadd'"></td>
  </tr>
  <tr>
    <td width="10%" align="center" valign="middle">編號</td>
    <td width="30%" align="center" valign="middle">商品名稱</td>
        <td width="20%" align="center" valign="middle">庫存量</td>
            <td width="20%" align="center" valign="middle">狀態</td>
                <td width="20%" align="center" valign="middle">操作</td>
  </tr>
  <?php do{ ?>
   <tr>
    <td width="10%" align="center" valign="middle"><?=$c2["item3_seq"]?></td>
    <td width="30%" align="center" valign="middle"><?=$c2["item3_txt"]?></td>
        <td width="20%" align="center" valign="middle"><?=$c2["item3_hm"]?></td>
            <td width="20%" align="center" valign="middle">
            <?php 
            if($c2["item3_display"] == "1"){
                echo "販售中";
            }else{ echo "已下架"; }
            ?>
            </td>
                <td width="20%" align="center" valign="middle">
                <input type="button" value="修改" onclick="document.location.href='admin.php?do=admin&redo=itemup&seq=<?=$c2["item3_seq"]?>'">
                <input type="button" value="刪除" onclick="document.location.href='delete.php?table=item3&seq=<?=$c2["item3_seq"]?>'"> 
                <input type="button" value="上架" onclick="upup(1,<?=$c2["item3_seq"]?>)">
                <input type="button" value="下架" onclick="upup(2,<?=$c2["item3_seq"]?>)">
                </td>
  </tr>
  <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
</table>

<script>
function upup(upup,seq){
        $.post("admin.php?do=admin&redo=item",{upup,seq},function(){
            document.location.href='admin.php?do=admin&redo=item' ;
        });
}

</script>
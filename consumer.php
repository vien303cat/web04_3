<?php



$sql = "select * from consumer";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td colspan="4" align="center">會員管理</td>
  </tr>
  <tr>
    <td width="25%" align="center">姓名</td>
    <td width="25%" align="center">會員帳號</td>
    <td width="25%" align="center">註冊日期</td>
    <td width="25%" align="center">操作</td>
  </tr>
  <?php do{ ?>
  <tr>
    <td width="25%" align="center"><?=$c2["consumer_name"]?></td>
    <td width="25%" align="center"><?=$c2["consumer_acc"]?></td>
    <td width="25%" align="center"><?=$c2["consumer_time"]?></td>
    <td width="25%" align="center">
    <input type="button" value="修改" onclick="document.location.href='admin.php?do=admin&redo=conup&seq=<?=$c2["consumer_seq"]?>'">
    <input type="button" value="刪除" onclick="document.location.href='delete.php?table=consumer&seq=<?=$c2["consumer_seq"]?>'"> 
    </td>
  </tr>
  <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
</table>
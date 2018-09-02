<?php


$sql = "select * from member";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td colspan="3" align="center"><input type="button" value="新增管理員" onclick="document.location.href='admin.php?do=admin&redo=memadd'"></td>
  </tr>
  <tr>
    <td width="30%" align="center">帳號</td>
    <td width="30%" align="center">密碼</td>
    <td width="30%" align="center">管理</td>
  </tr>
  <?php do{  ?>
  <tr>
    <td width="30%" align="center"><?=$c2["member_acc"]?></td>
    <td width="30%" align="center"><?=$c2["member_pw"]?></td>
    <td width="30%" align="center"><?php if($c2["member_acc"] == "admin"){ echo "此帳號為最高權限" ; }else{ ?>
    <input type="button" value="修改" onclick="document.location.href='admin.php?do=admin&redo=memup&seq=<?=$c2["member_seq"]?>'">
    <input type="button" value="刪除" onclick="document.location.href='delete.php?table=member&seq=<?=$c2["member_seq"]?>'"> 
    <?php  } ?>
    </td>
  </tr>
  <?php }while($c2 = mysqli_fetch_assoc($c1))  ?>
</table>
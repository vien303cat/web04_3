<?php 
if(!empty($_POST["big"])){
    $big = $_POST["big"];
    $sql = "insert into item1 value(null,'$big')";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=th'</script>";
}
if(!empty($_POST["mid"])){
    $mid = $_POST["mid"];
    $sql = "insert into item2 value(null,'$mid','".$_POST["sel"]."')";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=th'</script>";
}

?>

<table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="middle">商品分類 <a href='admin.php?do=admin&redo=item'>商品管裡</a></td>
  </tr>
  <tr><form method="post">
    <td colspan="2" align="center" valign="middle">新增大類<input type="text" name="big"><input type="submit" value="新增"></td>
  </tr></form>
  <tr><form method="post">
    <td colspan="2" align="center" valign="middle">新增中類
    <select name='sel'>
    <?php 
    $sql = "select * from item1";
    $c1  = mysqli_query($link,$sql);
    $c2  = mysqli_fetch_assoc($c1);
    do{
        echo "<option value='".$c2["item1_seq"]."'>".$c2["item1_txt"]."</option>";
    }while($c2  = mysqli_fetch_assoc($c1))
    ?>
    </seclet>
    <input type="text" name="mid"><input type="submit" value="新增"></td>
  </tr></form>
    <?php 
        $sql = "select * from item1";
        $c1  = mysqli_query($link,$sql);
        $c2  = mysqli_fetch_assoc($c1);
        do{
    ?>
  <tr>
    <td width="50%" align="center" valign="middle" class="tt"><?=$c2["item1_txt"]?></td>
    <td width="50%" align="center" valign="middle" class="tt">
    <input type="button" value="修改" onclick="up(1,<?=$c2["item1_seq"]?>)">
    <input type="button" value="刪除" onclick="document.location.href='delete.php?table=item1&seq=<?=$c2["item1_seq"]?>'"> 
    </td>
  </tr>
    <?php 
        $sqll = "select * from item2 where item2_i1 = '".$c2["item1_seq"]."'";
        $cc1  = mysqli_query($link,$sqll);
        $cc2  = mysqli_fetch_assoc($cc1);
    do { ?>
          <tr>
    <td width="50%" align="center" valign="middle"><?=$cc2["item2_txt"]?></td>
    <td width="50%" align="center" valign="middle">
    <input type="button" value="修改" onclick="up(2,<?=$cc2["item2_seq"]?>)">
    <input type="button" value="刪除" onclick="document.location.href='delete.php?table=item2&seq=<?=$cc2["item2_seq"]?>'"> 
    </td>
  </tr>
  <?php 
    }while($cc2  = mysqli_fetch_assoc($cc1));
}while($c2  = mysqli_fetch_assoc($c1)); ?>

</table>

<script>
function up(it,seq){
    var xx = prompt("請問要修改成什麼?","");
    if (xx){
        $.post("upapi.php",{it,seq,xx},function(){
            document.location.href='admin.php?do=admin&redo=th' ;
        });
    }
}

</script>
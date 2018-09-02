<?php
if(!empty($_POST["txt"])){
    $sql = "insert into item3 value(null,'".$_POST["txt"]."','".$_POST["type"]."','".$_POST["price"]."','".$_POST["hm"]."','".$_FILES["img"]["name"]."','".$_POST["sel"]."','".$_POST["sel2"]."','".$_POST["sel2"]."','1')";
    mysqli_query($link,$sql);
    copy($_FILES["img"]["tmp_name"],"img/".$_FILES["img"]["name"]);
    echo "<script>document.location.href='admin.php?do=admin&redo=item'</script>";
}
?>


新增商品<br>

<form method="post" enctype="multipart/form-data">
所屬大類:
<select name='sel'>
    <?php 
    $sql = "select * from item1";
    $c1  = mysqli_query($link,$sql);
    $c2  = mysqli_fetch_assoc($c1);
    do{
        echo "<option value='".$c2["item1_seq"]."'>".$c2["item1_txt"]."</option>";
    }while($c2  = mysqli_fetch_assoc($c1))
    ?>
    </select>
    <br>
所屬中類:
<select name='sel2'>
    <?php 
    $sql = "select * from item2";
    $c1  = mysqli_query($link,$sql);
    $c2  = mysqli_fetch_assoc($c1);
    do{
        echo "<option value='".$c2["item2_seq"]."'>".$c2["item2_txt"]."</option>";
    }while($c2  = mysqli_fetch_assoc($c1))
    ?>
    </select>
    <br>
商品編號:完成後自動分配<br>
商品名稱:<input type="text" name="txt"><br>
商品價格:<input type="text" name="price"><br>
規格:<input type="text" name="type"><br>
庫存量:<input type="text" name="hm"><br>
商品圖片:<input type="file" name="img"><br>
商品介紹:<textarea name="con"></textarea> <br>
<input type="submit" value="新增"><input type="reset" value="重置">
</form>
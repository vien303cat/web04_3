<?php
if(!empty($_POST["txt"])){
    if(empty($_FILES["img"]["name"])){
        $sql = "update item3 set item3_i1='".$_POST["sel"]."',item3_i2='".$_POST["sel2"]."',item3_txt='".$_POST["txt"]."',item3_price='".$_POST["price"]."',item3_type='".$_POST["type"]."',item3_hm='".$_POST["hm"]."',item3_con='".$_POST["con"]."' where item3_seq = '".$_GET["seq"]."'";
        mysqli_query($link,$sql);
    }else{
        $sql = "update item3 set item3_i1='".$_POST["sel"]."',item3_i2='".$_POST["sel2"]."',item3_txt='".$_POST["txt"]."',item3_price='".$_POST["price"]."',item3_type='".$_POST["type"]."',item3_hm='".$_POST["hm"]."',item3_con='".$_POST["con"]."',item3_img='".$_FILES["img"]["name"]."' where item3_seq = '".$_GET["seq"]."'";
        mysqli_query($link,$sql);
        copy($_FILES["img"]["tmp_name"],"img/".$_FILES["img"]["name"]);
    }
    echo "<script>document.location.href='admin.php?do=admin&redo=item'</script>";
}
?>


修改商品<br>

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
商品編號:完成後自動分配為<?=$_GET["seq"]?><br>
商品名稱:<input type="text" name="txt"><br>
商品價格:<input type="text" name="price"><br>
規格:<input type="text" name="type"><br>
庫存量:<input type="text" name="hm"><br>
商品圖片:<input type="file" name="img"><br>
商品介紹:<textarea name="con"></textarea> <br>
<input type="submit" value="修改"><input type="reset" value="重置">
</form>
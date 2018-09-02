<?php 

if(!empty($_POST["name"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $lo = $_POST["lo"];
    $cel = $_POST["cel"];
    
    $sql = "update consumer set consumer_name = '$name',consumer_email='$email',consumer_lo='$lo',consumer_cel='$cel' where consumer_seq = '".$_GET["seq"]."' ";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=mem'</script>";
}


$sql = "select * from consumer where consumer_seq = '".$_GET["seq"]."'";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

編輯會員資料<br>
<form method="post">
帳號 : <?=$c2["consumer_acc"]?> <br>
密碼 : <?=$c2["consumer_acc"]?>  <br>
姓名 : <input type="text" name="name" value="<?=$c2["consumer_name"]?> ">  <br>
電子信箱 : <input type="text" name="email" value="<?=$c2["consumer_email"]?> ">  <br>
地址 : <input type="text" name="lo" value="<?=$c2["consumer_lo"]?> ">  <br>
電話 : <input type="text" name="cel" value="<?=$c2["consumer_cel"]?> ">  <br>

<input type="submit" value="修改"><input type="reset" value="重置"><input type="button" value="返回" onclick="document.location.href='index.php'">
</form>
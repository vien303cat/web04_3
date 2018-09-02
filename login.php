<?php 

if(!empty($_POST["acc"])){
    $sql = "select * from consumer where consumer_acc = '".$_POST["acc"]."' and consumer_pw = '".$_POST["pw"]."'";
    $c1  = mysqli_query($link,$sql);
    $row = mysqli_num_rows($c1);
    if($row != 1 || $_POST["math"] != $_SESSION["math"]){
        echo "<script>alert('對不起，您輸入的驗證碼有誤請您重新登入')</script>";
    }else{
        $_SESSION["consumer"] = $_POST["acc"] ;
        echo "<script>document.location.href='index.php'</script>";
    }
}

$x = rand(1,100);
$y = rand(1,100);
$_SESSION["math"] = $x + $y ;
?>

<form method="post">
第一次購物<br>
<a href='index.php?do=conadd'><img src="img/0413.jpg"></a> <br>
會員登入<br>
帳號:<input type="text" name="acc"><br>
密碼:<input type="text" name="pw"><br>
驗證碼 : <?=$x?> + <?=$y?> = <input type="text" name="math" ><br>
<input type="submit" value="確定">
</form>
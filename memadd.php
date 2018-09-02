<?php 
if(!empty($_POST["acc"])){
    $acc = $_POST["acc"];
    $pw = $_POST["pw"];
    if($_POST["lv1"] == 1){
        $lv1 = 1 ;
    }else{ $lv1 = 0 ; }
    if($_POST["lv2"] == 1){
        $lv2 = 1 ;
    }else{ $lv2 = 0 ; }
    if($_POST["lv3"] == 1){
        $lv3 = 1 ;
    }else{ $lv3 = 0 ; }
    if($_POST["lv4"] == 1){
        $lv4 = 1 ;
    }else{ $lv4 = 0 ; }
    if($_POST["lv5"] == 1){
        $lv5 = 1 ;
    }else{ $lv5 = 0 ; }

    $sql = "insert into member value(null,'$acc','$pw','$lv1','$lv2','$lv3','$lv4','$lv5')";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php'</script>";
}

?>

新增管理帳號<br>
<form method="post">
帳號 : <input type="text" name="acc" > <br>
密碼 : <input type="text" name="pw" >  <br>
<input type="checkbox" name="lv1" value="1">商品分類與管理<br>
<input type="checkbox" name="lv2" value="1">訂單管理<br>
<input type="checkbox" name="lv3" value="1">會員管理<br>
<input type="checkbox" name="lv4" value="1">頁尾版權管理<br>
<input type="checkbox" name="lv5" value="1">最新消息管理<br>
<input type="submit" value="新增"><input type="reset" value="重置">
</form>
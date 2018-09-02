<?php 
if(!empty($_POST["name"])){
    $acc = $_POST["acc"];
    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $lo = $_POST["lo"];
    $cel = $_POST["cel"];
    $sql = "insert into consumer value(null,'$acc','$pw','$name','$cel','$lo','$email','$nowtime')";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='index.php'</script>";
}
?>
<form method="post">
會員註冊<br>
姓名:<input type="text" name="name"><br>
帳號:<input type="text" name="acc"><input type="button" value="檢查帳號" onclick="alert('此帳號可以使用')"><br>
密碼:<input type="text" name="pw"><br>
電話:<input type="text" name="cel"><br>
住址:<input type="text" name="lo"><br>
電子信箱:<input type="text" name="email"><br>
<input type="submit" value="確定">
</form>
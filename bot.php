<?php
if(!empty($_POST["txt"])){
    $sql = "update bot set bot_txt = '".$_POST["txt"]."'";
    mysqli_query($link,$sql);
}
?>


<form method="post" >
編輯頁尾版權區<br>
頁尾版權內容:<input type="text" name="txt"><br>
<input type="submit" value="編輯"> | <input type="reset" value="重置">
</form>
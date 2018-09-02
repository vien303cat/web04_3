<?php 
include_once("head.php");
if(empty($_SESSION["consumer"])){
    echo "<script>document.location.href='index.php?do=login'</script>";
}else{
    if(!empty($_GET["hm"])){
        $sql = "insert into buycar value(null,'".$_SESSION["consumer"]."','".$_GET["hm"]."','".$_GET["seq"]."')";
        mysqli_query($link,$sql);
    }else{
        $sql = "insert into buycar value(null,'".$_SESSION["consumer"]."','1','".$_GET["seq"]."')";
        mysqli_query($link,$sql);
    }
    echo "<script>document.location.href='index.php?do=buycar'</script>";
}
?>
<?php 
include_once("head.php");

if(!empty($_POST["it"])){
    $it = $_POST["it"] ;
    $seq = $_POST["seq"] ;
    $xx = $_POST["xx"] ;
    if($it == 1 ){
        $sql = "update item1 set item1_txt = '$xx' where item1_seq = '$seq' ";
        mysqli_query($link,$sql);
    }else{
        $sql = "update item2 set item2_txt = '$xx' where item2_seq = '$seq' ";
        mysqli_query($link,$sql);
    }
}
echo "<script>document.location.href='admin.php?do=admin&redo=th'</script>";
?>
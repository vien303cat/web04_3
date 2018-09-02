<?php
$list["admin"] = "memlog.php";
$list["all"] = "all.php";
$list["login"] = "login.php";
$list["conadd"] = "conadd.php";
$list["itdata"] = "itdata.php";
$list["buycar"] = "buycar.php";
$list["noall"] = "noall.php";
$list["news"] = "news.php";
$list["look"] = "look.php";
$list["go"] = "go.php";
$relist["admin"] = "member.php";
$relist["memadd"] = "memadd.php";
$relist["memup"] = "memup.php";
$relist["th"] = "th.php";
$relist["bot"] = "bot.php";
$relist["mem"] = "consumer.php";
$relist["conup"] = "conup.php";
$relist["item"] = "item.php";
$relist["itemup"] = "itemup.php";
$relist["itemadd"] = "itemadd.php";
if(!empty($_GET["do"])){
    $do = $_GET["do"];
}else{
    $do = "all";
}
if(!empty($_GET["redo"])){
    $redo = $_GET["redo"];
}else{
    $redo = "admin";
}
?>
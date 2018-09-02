<?php 
session_start();
$link = mysqli_connect("localhost","root","","db04_3");
mysqli_query($link,"SET NAMES UTF8");
$strtime = strtotime("+6hour");
$nowtime = date("YmdHis");
include_once("web_list.php");
?>
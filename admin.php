<?php include_once("head.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>┌精品電子商務網站」</title>
<link href="./home_files/css.css" rel="stylesheet" type="text/css">
<script src="./home_files/js.js"></script>
<script src="./home_files/jquery-1.8.3.min.js"></script>
</head>

<body>

<?php 
	$sql = "select * from member where member_acc = '".$_SESSION["member"]."'";
	$c1  = mysqli_query($link,$sql);
	$c2  = mysqli_fetch_assoc($c1);
?>
<iframe name="back" style="display:none;"></iframe>
	<div id="main">
    	<div id="top">
        	<a href="index.php">
            	<img src="./Manage Page_files/0416.jpg">
            </a>
                            <img src="./Manage Page_files/0417.jpg">
                   </div>
        <div id="left" class="ct">
        	<div style="min-height:400px;">
<?php if($c2["member_acc"] == "admin"){ ?> <a href="?do=admin&redo=admin">管理權限設置</a> <?php } ?>
<?php if($c2["member_lv1"] == "1"){ ?>	<a href="?do=admin&redo=th">商品分類與管理</a><?php } ?>
<?php if($c2["member_lv2"] == "1"){ ?>	<a href="?do=admin&redo=order">訂單管理</a><?php } ?>
	<?php if($c2["member_lv3"] == "1"){ ?>	<a href="?do=admin&redo=mem">會員管理</a><?php } ?>
		<?php if($c2["member_lv4"] == "1"){ ?>	<a href="?do=admin&redo=bot">頁尾版權管理</a><?php } ?>
			<?php if($c2["member_lv5"] == "1"){ ?>	<a href="#">最新消息管理</a><?php } ?>
            	        	<a href="index.php" style="color:#f00;">登出</a>
                    </div>
                    </div>
        <div id="right" style="overflow:auto;">
		<?php include_once($relist[$redo]); ?>
        	        </div>
        <div id="bottom" style="line-height:70px; color:#FFF; background:url(icon/bot.png);" class="ct">
        	頁尾版權 :       
			<?php 
			    $sql = "select * from bot";
				$c1  = mysqli_query($link,$sql);
				$c2  = mysqli_fetch_assoc($c1);
				echo $c2["bot_txt"];
			?>
			 </div>
    </div>

</body></html>
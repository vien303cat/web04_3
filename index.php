<?php include_once("head.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>┌精品電子商務網站」</title>
<link href="./home_files/css.css" rel="stylesheet" type="text/css">
<script src="./home_files/js.js"></script>
<script src="./home_files/jquery-1.8.3.min.js"></script>
</head>

<body>
<iframe name="back" style="display:none;"></iframe>
	<div id="main">
    	<div id="top">
        	<a href="?">
            	<img src="./home_files/0416.jpg" width="500px">
            </a>
                        <div style="padding:10px;float:right">
                <a href="?">回首頁</a> |
                <a href="?do=news">最新消息</a> |
                <a href="?do=look">購物流程</a> |
                <a href="?do=buycar">購物車</a> |<?php if(empty($_SESSION["consumer"])){ ?>
                                <a href="?do=login">會員登入</a> |  <?php }else{ echo "<a href='logout.php'>登出</a>"."|"; } ?>
                                <a href="?do=admin">管理登入</a>
           </div>
                <marquee>情人節特惠活動 &nbsp; 年終特賣會開跑了  </marquee>      </div>
        <div id="left" class="ct">
        <?php include_once("left.php"); ?>
        	<div style="height:400px;overflow:auto;">
        	            </div>
                        <span>
            	<div>進站總人數</div>
                <div style="color:#f00; font-size:28px;">
                	00005                </div>
            </span>
                    </div>
        <div id="right" style="overflow:auto;">
        <?php include_once($list[$do]); ?>
        	        </div>
        <div id="bottom" style="line-height:70px;background:url(icon/bot.png); color:#FFF;" class="ct">
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
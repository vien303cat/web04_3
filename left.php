<a href='index.php'>全部商品</a>

<?php 
$sql = "select * from item1 ";
$c1 = mysqli_query($link,$sql);
$c2 = mysqli_fetch_assoc($c1);
do{
    echo "<div class='mainmu'><a href='index.php?do=noall&pp=1&seq=".$c2["item1_seq"]."'>".$c2["item1_txt"]."</a>";
    $sqll = "select * from item2 where item2_i1 = '".$c2["item1_seq"]."'";
    $cc1 = mysqli_query($link,$sqll);
    $cc2 = mysqli_fetch_assoc($cc1);
    do{
        echo "<div class='mw' style='display:none'><a href='index.php?do=noall&pp=2&seq=".$cc2["item2_seq"]."'>".$cc2["item2_txt"]."</a></div>";
    }while($cc2 = mysqli_fetch_assoc($cc1));
    echo "</div>";
}while($c2 = mysqli_fetch_assoc($c1))
?>


<script>
$(document).ready(function(e) {
    $(".mainmu").mouseover(
		function()
		{
			$(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function ()
		{
			$(this).children(".mw").hide()
		}
	)
});
</script>
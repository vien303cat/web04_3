<?php 
$sql ="select * from item3,item1,item2 where item3_seq = '".$_GET["seq"]."' and item3_i1 = item1_seq and item3_i2 = item2_seq";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<?=$c2["item3_txt"]?><br>
<img src="img/<?=$c2["item3_img"]?>" width="200px" height="200px"><br>
分類: <?=$c2["item1_txt"]?> > <?=$c2["item2_txt"]?><br>
編號: <?=$c2["item3_seq"]?><br>
價格: <?=$c2["item3_price"]?><br><br>
詳細說明: <?=$c2["item3_con"]?><br><br>
庫存量: <?=$c2["item3_hm"]?><br>
<br>
購買數量:<input type="text" name="hm" id="hm" value="1"><a href='Javascript:buy()'><img src="img/0402.jpg"></a>

<script>
function buy(){
    var hm = document.getElementById("hm").value;
    document.location.href='buyapi.php?hm='+hm+'&seq=<?=$_GET["seq"]?>';
}
</script>
<!-- 顯示物品詳細資料頁面。 -->
<?php

$goods =$Goods->find($_GET['id']);
$goods_type =$type->find($goods['big'])['name'];
$goods_type .= " > ";
$goods_type .= $Type->find($goods['mid'])['mame'];

?>

<h2 class="ct"><?=$goods['name'];?></h2>
<?php

if (isset($_GET['type']) && $_GET['type'] != 0) {
    $type = $Type->find($_GET['type']);
    if ($type['parent'] == 0) {
        $nav = $type['name'];
    } else {
        $type_big = $Type->find($type['parent']);
        $nav = $type_big['name'] . ">" . $type['name'];
    }
    echo "某部分商品。";
} else {
    echo "全部商品";
    $rows = $Goods->all(['sh' => 1]);
}
?>

<?= $nav; ?>


<?php
foreach ($rows as $row) {
?>
    <div class="all pp" style="display: flex"></div>
    <div>
        <div>
            <img src="./uplode/<?=$row['img']?>" alt="" style="width: 250px;height: 120px">
        </div>
        <div>
            <div class="tt ct"><?=$row['name'];?></div>
            <div>價錢<?= $row['price']?></div>
            <div>規格<?= $row['spec']?></div>
            <div>簡介<?= $row['intro']?></div>
        </div>
    </div>
<?php
}
?>
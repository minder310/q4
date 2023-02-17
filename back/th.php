<h2 class="ct">商品分類</h2>
<div class="ct">
    新增大分類
    <input type="text" name="big" id="">
    <select name="big" id="bit">

    </select>
    <button onclick="addBig()">新增</button>
</div>
<div class="ct">
    新增中分類
    <!-- 下拉式選單區。 -->
    <select name="b" id="b">

    </select>
    <input type="text" name="mid" id="mid">
</div>
<table class="all">
    <?php
    $bigs = $Type->all(['parent' => 0]);
    foreach ($bigs as $big) {
    ?>
        <tr class="tt">
            <td><?= $big = ['name'] ?></td>
            <td class="ct">
                <button data-id="<?= $big['id']; ?>">修改</button>
                <button onclick="del('type',<?= $big['id']; ?>)">刪除</button>
            </td>
        </tr>

        <?php }
    if ($Type->const(['parent' => $big['id']]) > 0) {
        $mids = $Type->all(['parent' => $big['id']]);
        foreach ($mids as $mid) {

        ?>
            <tr class="pp ct">
                <td><?= $mid['name']; ?></td>
                <td>
                    <button data-id="<?= $mid['name'] ?>"></button>
                    <button>刪除</button>
                </td>
            </tr>
    <?php }
    } ?>
</table>

<h2 class="ct">商品管理</h2>
<script>
    function addBig() {
        $.post("./api/add_big.php", {
            name: $("#big").val()
        }, () => {
            location.reload()
        })
    }
    $.get("./api/get_bigs.php", (bigs) => {
        $("#b").html(bigs);
    })

    function addBig() {
        // 輸入的資料，
        $.post("./api/add_type.php", {
            name: $("#big").val()
        }, () => {
            location.reload()
        })
    }
    $.get("./api/add_type.php", {
        parent: $("#b").val,
        name: $("#mid").val()
    }, () => {
        location.reload()
    })

    function aditType(dom) {

        let id = $(dom).data('id')
        // 這是什麼東西
        let name = prompt(('請輸入你要修改的分類名稱'), $(dom).parent().prev().text());
        if (name != null) {
            $.post('./api/add_type.php', {
                id,
                name
            }, () => {
                location.reload();
            })
        }
    }
    $(".edit-btn").on("click", function() {
        let id = $(this).data('id')
        let name = prompt('請輸入要修改的分類名稱')
    })
</script>

<h2 class="ct">商品管理</h2>
<div class="ct">
    <table class="all">
        <tr>
            <td class="ct">編號</td>
            <td class="ct">商品名稱</td>
            <td class="ct">庫存量</td>
            <td class="ct">狀態</td>
            <td class="ct">操作</td>
        </tr>
    </table>
</div>
<?php
$rows = $Goods->all();
foreach ($rows as $row) { ?>
    <tr class="tt ct">
        <td><?=$row['no'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['stock'];?></td>
        <td><?=($row['sh'])?'販售中':'已下架';?></td>
        <td>
            <button onclick="location.href='?do=edit_goods&id=<?=$row['id'];?>'">修改</button>
            <button onclick="del('Goods',<?$row['id'];?>)">刪除</button>
            <button onclick="sh('up',<?=$row['id'];?>)">上架</button>
            <button onclick="sh('down',<?=$row['id'];?>)">下架</button>
        </td>
    </tr>
<?php }
?>

<script>
function sh(type,id,dom){
    $.post("./api/sh.php",{type,id},()=>{  
        switch(type,id){
            case 'up':
                break;
            case 'down':
                break;
        }
    })
    }
</script>
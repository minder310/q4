<div class="ct">
    <button onclick="location.href='?do=new_admin'">新增管理員</button>
</div>

<table class="all ct">
    <tr class="tt">
        <td>姓名</td>
        <td>會員帳號</td>
        <td>註冊日期</td>
        <td>操作</td>
    </tr>
    <tr class="pp">
        <?php

        $rows = $Mem->all();
        foreach ($rows as $row) {
        ?>
    <tr class="pp">

        <td><?= $row['name']; ?></td>
        <td><?= $row['acc'];?></td>
        <td><?= $row['reg_date'];?></td>
        <td>
            <!-- 不變換網頁只更改do後面的東西。 -->
            <button onclick="location.href='?do=edit_detail&id=<?= $row['id']; ?>'">修改</button>
            <button onclick="del('mem',<?= $row['id']; ?>)">刪除</button>
        </td>
    </tr>
<?php
        }
?>
</tr>
</table>
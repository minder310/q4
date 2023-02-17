<div class="ct">
    <button onclick="location.href='?do=new_admin'">新增管理員</button>
</div>

<table class="all ct">
    <tr class="tt">
        <td>帳號</td>
        <td>密碼</td>
        <td>管理</td>
    </tr>
    <tr class="pp">
        <?php
        $rows = $Admin->all();
        foreach ($rows as $row) {
        ?>
            <td><?= $row['acc']; ?></td>
            <td><?= str_repeat("*", strlen($row['pw'])); ?></td>
            <td>
                <?php
                if ($row['acc'] != 'admin') {
                ?>
                                    <!-- 不變換網頁只更改do後面的東西。 -->
                    <button onclick="location.href='?do=edit_admin&id=<?= $row['id']; ?>'">修改</button>
                    <button onclick="del('Admin',<?= $row['id']; ?>)">刪除</button>
                <?php } else {
                    echo "此帳號為最高權限";
                }
                ?>
            </td>
        <?php
        }
        ?>
    </tr>
</table>
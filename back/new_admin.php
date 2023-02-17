<h2 class="ct">新增管理帳號</h2>
<form action="../api/save_admin.php" method="post">
    <table class="all">
        <tr>
            <td class="tt ct">帳號</td>
            <td class="pp"><input type="text" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td class="tt ct">密碼</td>
            <td class="pp"><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td class="tt ct">權限</td>
            <td class="pp">
                <input type="checkbox" name="pr[]" id="1">商品分類與管理<br>
                <input type="checkbox" name="pr[]" id="2">訂單管理<br>
                <input type="checkbox" name="pr[]" id="3">會員管理<br>
                <input type="checkbox" name="pr[]" id="4">頁尾版權區理<br>
                <input type="checkbox" name="pr[]" id="5">最新消息管理<br>
            </td>
        </tr>
    </table>
</form>
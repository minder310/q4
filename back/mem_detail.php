<?php
$mem=$Mem->find($_GET['id']);
?>
<h2 class="ct">編輯會員資料</h2>

<table class="all">
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><?=$mem['acc'];?></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="text" name="tel" id=""></td>
    </tr>
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp"><input type="text" name="" id=""></td>
    </tr>
    <tr>
        <td class="tt ct">電話</td>
        <td class="pp"><input type="text" name="" id=""></td>
    </tr>
    <tr>
        <td class="tt ct">住址</td>
        <td class="pp"><input type="text" name="" id=""></td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp"><input type="text" name="" id=""></td>
    </tr>
</table>
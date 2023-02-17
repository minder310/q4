<?php
include_once "base.php";

// 這是新增資料。
if (!isset($_POST['id'])) {
    $_POST['reg_date'] = date("Y-m-d");
    $Mem->save($_POST);
    exit();
}
// 這是更新資料。
$Mem->save($_POST);

to("../back.php?do=mem");

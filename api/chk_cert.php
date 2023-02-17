<!--確認數值，驗證碼數值用。 -->
<?php 
include_once "./base.php";

if($_GET['cert']==$_SESSION['cert']){
    echo 1;
}else{
    echo 0;
}
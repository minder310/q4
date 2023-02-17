<h2 class="ct">新增商品</h2>

<form action="../api/save_goods.php" method="post" enctype="multipart/form-data"></form>
<table class="ct">
    <tr>
        <td class="ct tt">所屬大分類</td>
        <td class="pp"><select name="big" id="big" onchange="getMids()"></select></td>
    </tr>
    <tr>
        <td class="ct tt">所屬中分類</td>
        <td class="pp"><select name="min" id="min"></select></td>
    </tr>
    <tr>
        <td class="ct tt">商品編號</td>
        <td class="pp"></td>
    </tr>
    <tr>
        <td class="ct tt">商品名稱</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
        <td class="ct tt">商品價格</td>
        <td class="pp"><input type="number" name="price" id="price"></td>
    </tr>
    <tr>
        <td class="ct tt">規格</td>
        <td class="pp"><input type="text" name="spec" id="spec"></td>
    </tr>
    <tr>
        <td class="ct tt">庫存量</td>
        <td class="pp"><input type="text" name="stock" id="stock"></td>
    </tr>
    <tr>
        <td class="ct tt">商品圖片</td>
        <td class="pp"><input type="text" name="img" id="img"></td>
    </tr>
    <tr>
        <td class="ct tt">商品介紹</td>
        <td class="pp"><input type="text" name="intro" id="intro"></td>
    </tr>
</table>
<script>
    // 預設啟動一次
    getBigs()
    // 
    function getBigs(){
        $.get("./api/get_bigs.php",(bigs)=>{
            // .的意思是只能執行jq原來的指令。
            $("big").html(bigs)
            // 另外寫的函數，必須寫在另外一行。
            getMids()
        })
    }
    function getMids(){
        let big=$("#big").val()
        // 有帶參數，會是post。
        $("mid").load("./api/get_mids.php",{big})
    }

    // $("#big").on("change",function(){
    //     getMids();
    // })
</script>
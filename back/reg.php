<h2 class="ct">會員註冊</h2>

<table class="all">
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc">
        <button>檢測帳號</button>
        </td>
    </tr>
    <tr>
        <td class="tt ct">電話</td>
        <td class="pp"><input type="password" name="tel" id="tel"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="text" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">住址</td>
        <td class="pp"><input type="text" name="addr" id="addr"></td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email"></td>
    </tr>
</table>
<div class="ct">
    <button>註冊</button>
    <button>重置</button>
</div>
<script>
    $("#check").on('ckick',function(){
        let acc=$("#acc").val();
        $.get("./api/chk_acc.php",{acc},(result)=>{
            if(parseInt(reset) || acc=="admin"){
                alert("此帳號已存在，請使用別的帳號")
            }else{
                alert("此帳可使用。")
            }
        })
    })
</script>
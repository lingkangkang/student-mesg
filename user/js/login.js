/**
 * Created by Administrator on 2016/10/17.
 */
//界面处理
function submits(e){
    e.preventDefault()
}
setTimeout(function () {
    $('.container').show(2000);
},1000)

//发送ajax请求 实现判断 和页面跳转
$(function () {
    $('#btn').click(function () {
        var username = $('#username').val();
        var password = $('#password').val();
        console.log(username+password);

        $.ajax({
            type:'post',
            url:'../user/php/judgeLogin.php',
            dataType:'text',
            data:{'username':username,'password':password},
            success:function (data) {
                console.log(data)
                if (data=='false'){
                    $('#check').show()
                }else {
                    $('#check').hide();
                    location.href = "../user/php/loginSucess.php"
                }
            },
            error:function () {
                console.log("错误");
            }
        });

    })

})
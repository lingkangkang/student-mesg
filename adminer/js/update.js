/**
 * Created by Administrator on 2016/10/22.
 */
function updateSend() {
    var updateNumber = document.getElementById('updateSearch').value;
    var updateOld = document.getElementById('updateOld').value;
    var updateNew = document.getElementById('updateNew').value;
    
    
    //发送ajax请求
    $.ajax({
        type:'post',
        url:'../php/update.php',
        dataType:'text',
        data:{'updateNumber':updateNumber,'updateOld':updateOld,'updateNew':updateNew},
        success:function (data) {

            console.log(data)
            if (data=='false'){
                $('#updateContent').show();
                $('#updateInput').show();
            }else {
                $('#updateShow').append(data);
                $('#updateContent').hide();
                $('#updateInput').hide();

            }

        },
        error:function () {
            console.log("错误");
        }
    });
}   
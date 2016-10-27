/**
 * Created by Administrator on 2016/10/24.
 */
/**
 * Created by Administrator on 2016/10/22.
 */
function resets() {
     document.getElementById('addUsername').value='';
     document.getElementById('addOld').value='';
     document.getElementById('addNew').value='';
     document.getElementById('sex').value='';
     document.getElementById('name').value='';
}
function addSend() {

    var addUsername = document.getElementById('addUsername').value;
    var addOld = document.getElementById('addOld').value;
    var addNew = document.getElementById('addNew').value;

    var sex = document.getElementById('sex').value;
    var name = document.getElementById('name').value;
    if(addNew!=addOld){
        $('#checkPassword').show();
        return ;
    }else {
        $('#checkPassword').hide();

   


    //发送ajax请求
    $.ajax({
        type:'post',
        url:'../php/add.php',
        dataType:'text',
        data:{'addUsername':addUsername,'addOld':addOld,'sex':sex,'name':name},
        success:function (data) {

            console.log(data)
            if (data=='false'){
                $('#addContent').show();
                $('#addCheck').show();
            }else {
                $('#addShow').append(data);
                $('#addCheck').hide();
                $('#addContent').hide();

            }

        },
        error:function () {
            console.log("错误");
        }
    });
}
}
/**
 * Created by Administrator on 2016/10/24.
 */


function deletes() {

    var deleteUsername = document.getElementById('deletes').value;
    // console.log(number);

    $.ajax({
        type:'post',
        url:'../php/delete.php',
        dataType:'text',
        data:{'deleteUsername':deleteUsername},
        success:function (data) {

            console.log(data)
            if (data=='false'){
                $('#deleteSearch').show();
                $('#deleteInput').show();
                $('#deleteContent').hide();
            }else {
                $('#deleteSearch').hide();
                $('#deleteInput').hide();
                $('#deleteContent').show();

            }

        },
        error:function () {
            console.log("错误");
        }
    });

}


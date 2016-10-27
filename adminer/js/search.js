

function send1() {

        var number = document.getElementById('search').value;
        // console.log(number);

        $.ajax({
            type:'post',
            url:'../php/search.php',
            dataType:'text',
            data:{'number':number},
            success:function (data) {

                console.log(data)
                if (data=='false'){
                    $('#searchContent').show();
                    $('#input').show();
                }else {
                    $('#showContent').append(data);
                    $('#searchContent').hide();
                    $('#input').hide();

                }

            },
            error:function () {
                console.log("错误");
            }
        });

    }


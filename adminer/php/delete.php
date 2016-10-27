<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/22
 * Time: 16:57
 */


$deleteUsername = $_POST['deleteUsername'];



//1.链接数据库
$sql = mysqli_connect('localhost','root','');
mysqli_select_db($sql,'sql');
mysqli_query($sql,'set names utf8');
//2.查找

$do=  "SELECT * FROM ling WHERE username='$deleteUsername'";
$result = mysqli_query($sql,$do);
$number=mysqli_num_rows($result);
mysqli_close($sql);



//在 第一次查找成功的前提下进行第二次操作
if ($number&&$deleteUsername!=1331311125){

//链接数据库
    $sql = mysqli_connect('localhost','root','');
    mysqli_select_db($sql,'sql');
    mysqli_query($sql,'set names utf8');
//进行数据库的操作
//
    $do=  "DELETE FROM ling WHERE username='$deleteUsername'";
    $result = mysqli_query($sql,$do);

//更改密码后输出 正确完成操作后
//
    if ($result==1) {
//        echo '<li class="alert alert-success" style="text-align: center; font-size: 24px">修改成功 修改后如下：<br></li>';
//              echo 'gfdgfd';
        mysqli_close($sql);
        echo '删除成功';
            
        }
        else{

            echo 'false';
        }


}else{
    echo 'false';
}





?>
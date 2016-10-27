<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/22
 * Time: 16:57
 */


$updateNumber = $_POST['updateNumber'];
$updateOld = $_POST['updateOld'];
$updateNew = $_POST['updateNew'];


//1.链接数据库
$sql = mysqli_connect('localhost','root','');
mysqli_select_db($sql,'sql');
mysqli_query($sql,'set names utf8');
//2.查找

$do=  "SELECT * FROM ling WHERE username='$updateNumber'";
$result = mysqli_query($sql,$do);
$number=mysqli_num_rows($result);
$data=mysqli_fetch_assoc($result);
$username=$data['username'];
mysqli_close($sql);



//在 第一次查找成功的前提下进行第二次操作
if ($number&&$username!=1331311125){

//链接数据库
    $sql = mysqli_connect('localhost','root','');
    mysqli_select_db($sql,'sql');
    mysqli_query($sql,'set names utf8');
//进行数据库的操作
//
    $do=  "UPDATE ling SET password='$updateNew'WHERE password='$updateOld' and username='$updateNumber'";
    $result = mysqli_query($sql,$do);
    mysqli_close($sql);

//更改密码后输出 正确完成操作后
//
    if ($result==1) {
//        echo '<li class="alert alert-success" style="text-align: center; font-size: 24px">修改成功 修改后如下：<br></li>';

// 在第二次操作成功下 进行第三次链接
        $sql = mysqli_connect('localhost','root','');
        mysqli_select_db($sql,'sql');
        mysqli_query($sql,'set names utf8');

        $do=  "SELECT * FROM ling WHERE username='$updateNumber'";
        $result = mysqli_query($sql,$do);
        $number=mysqli_num_rows($result);

        if ($number){

            $data=mysqli_fetch_assoc($result);
            $sex=$data['sex'];
            $name=$data['name'];
            $username=$data['username'];
            $password=$data['password'];
            echo '<li class="alert alert-activate" style="font-size: 24px;">修改成功 修改后如下：</li><br><li class="alert alert-success">姓名：'.$name.'</li><li class="alert alert-info">性别：'.$sex.'</li><li class="alert alert-warning">学号：'.$username.'</li><li class="alert alert-danger">登录密码：'.$password.'</li><br>';

        }
        else{

            echo 'false';
        }
        mysqli_close($sql);



    }else{
        echo 'false';
    }
}else{
    echo 'false';
}





?>
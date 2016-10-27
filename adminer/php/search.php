<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/22
 * Time: 14:28
 */

$username = $_POST['number'];

//链接数据库
$sql = mysqli_connect('localhost','root','');
mysqli_select_db($sql,'sql');
mysqli_query($sql,'set names utf8');
//进行数据库的操作

$do=  "SELECT * FROM ling WHERE username='$username'";
$result = mysqli_query($sql,$do);
$number=mysqli_num_rows($result);


if ($number){
    
    $data=mysqli_fetch_assoc($result);
    $sex=$data['sex'];
    $name=$data['name'];
    $username=$data['username'];
    $password=$data['password'];
    echo '<li class="alert alert-activate" style="font-size: 24px;">查询结果是：</li><br><li class="alert alert-success">姓名：'.$name.'</li><li class="alert alert-info">性别：'.$sex.'</li><li class="alert alert-warning">学号：'.$username.'</li><li class="alert alert-danger">登录密码：'.$password.'</li><br>';

}
else{

    echo 'false';
}
mysqli_close($sql);




















?>
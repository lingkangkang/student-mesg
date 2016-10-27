
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/20
 * Time: 15:05
 */
$username = $_POST['username'];
$password=$_POST['password'];

//链接数据库
$sql = mysqli_connect('localhost','root','');
mysqli_select_db($sql,'sql');
mysqli_query($sql,'set names utf8');
//进行数据库的操作

$do=  "SELECT * FROM ling WHERE username='$username' and password='$password'";
$result = mysqli_query($sql,$do);
$number=mysqli_num_rows($result);

if ($number){
    if ($username=='1331311125'&&$password=='Kangkang'){

        //   在ajax请求页面实现页面跳转
        $data=mysqli_fetch_assoc($result);
        $sex=$data['sex'];
        $name=$data['name'];

        //验证正确 则开启session记录登录
        session_start();
        $_SESSION['sex']=$sex;
        $_SESSION['name']=$name;
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        echo 0;
    }
    else{

        echo 1;
    }
    
}else{
    echo 1;
}

mysqli_close($sql);

?>

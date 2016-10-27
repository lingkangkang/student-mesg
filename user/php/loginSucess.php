
<?php
// session 必须在html 标签之前打开
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录成功</title>
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/loginSucess.css">

</head>
<body>
<h2 style="text-align: center;color: black;">学生个人信息展示栏</h2>
<br><br><br><br>
<div id="main" >
    <div class="list-group">
        <div id="msg1"><a href="#" class="list-group-item list-group-item-success">姓名：<?php echo  $_SESSION['name'];  ?></a></div>
        <div id="msg2"><a href="#" class="list-group-item list-group-item-info">性别：<?php  echo  $_SESSION['sex'] ;?></a></div>
        <div id="msg3"><a href="#" class="list-group-item list-group-item-warning">学号：<?php  echo  $_SESSION['username'];  ?></a></div>
        <div id="msg4"><a href="#" class="list-group-item list-group-item-danger">登录密码：<?php  echo $_SESSION['password'];  ?></a></div>
    </div>
</div>

<!--特效部分-->
<div id="div1">
    <div id="div2">博</div>
    <div id="div3">学</div> 
    <div id="div4">厚</div> 
    <div id="div5">德</div>
    <div id="div10"></div>
    <div id="div6">善</div>
    <div id="div7">思</div>
    <div id="div8">报</div> 
    <div id="div9">国</div>
    
    
</div>

</body>
</html>

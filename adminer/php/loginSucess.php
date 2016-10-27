<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/21
 * Time: 16:44
 */


//用session 来实现 输入网址直接进入登录成功页面
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/loginSucess.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/search.css">
    <link rel="stylesheet" href="../css/update.css">
    <link rel="stylesheet" href="../css/add.css">
    <link rel="stylesheet" href="../css/delete.css">





    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
    <script src="http://apps.bdimg.com/libs/angular-route/1.3.13/angular-route.js"></script>
    <script src="../js/loginSuController.js"></script>
    
<!--    管理员 操作引入的js-->
    <script src="../js/search.js"></script>
    <script src="../js/update.js"></script>
    <script src="../js/add.js"></script>
    <script src="../js/delete.js"></script>



    <meta charset="UTF-8">
    <title>管理员界面</title>
</head>
<body >
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">

            <a class="navbar-brand" href="#"><strong>学生信息中心</strong></a>
        </div>

    </div>
</nav>
<div class="container-fluid" ng-app="msgApp">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar" style="font-size: 16px">
                <li ><a href="#/home"><strong>------首页------</strong></a></li><br>
                <li ><a href="#/search"><strong>搜查学生信息</strong></a></li><br>
                <li ><a href="#/update"><strong>更新学生信息</strong></a></li><br>
                <li ><a href="#/add"><strong>增加学生账号</strong></a></li><br>
                <li ><a href="#delete"><strong>删除学生账号</strong></a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" >
            <ng-view> </ng-view>
        </div>
    </div>
</div>


</body>
</html>

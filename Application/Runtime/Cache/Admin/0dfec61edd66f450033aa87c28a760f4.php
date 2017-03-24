<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link href="/test/tp_pro3/Application/Admin/Public/css/admin_login.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/test/tp_pro3/Application/Admin/Public/images/favicon.ico" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>系统后台--管理员登陆</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">用户名：</label>
                        <input type="text" name="username" value="admin"  size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">密码：</label>
                        <input type="password" name="password" value=""  size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">验证码：</label>
                        <input type="text" name="verify" value=""  size="15" class="admin_input_style" />
                    </li>
                    <li>
                    <img  src="/test/tp_pro3/index.php/Admin/Login/verify" style="cursor:pointer" onclick="this.src='/test/tp_pro3/index.php/Admin/Login/verify/'+Math.random();">
                    </li>
                    <li>
                        <input type="submit" tabindex="3" value="提交" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/test/tp_pro3/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/test/tp_pro3/Application/Admin/Public/css/main.css"/>
    <link rel="shortcut icon" href="/test/tp_pro3/Application/Admin/Public/images/favicon.ico" />
    <script type="text/javascript" src="/test/tp_pro3/Application/Admin/Public/js/libs/modernizr.min.js"></script>
</head>
<body>

<!--/引入模板头部-->
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/test/tp_pro3/index.php/Admin/Index/index">首页</a></li>
                <li><a href="http://<?php echo ($_SERVER['HTTP_HOST']); ?>" target="_blank">空间首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">管理员:<?php echo ($_SESSION['username']); ?></a></li>
                <li><a href="/test/tp_pro3/index.php/Admin/Admin/edit/id/<?php echo ($_SESSION['id']); ?>">修改密码</a></li>
                <li><a href="/test/tp_pro3/index.php/Admin/Admin/logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>   

<div class="container clearfix">

<!--/引入模板左部-->
    <!--/sidebar-->
<div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                       <li><a href="/test/tp_pro3/index.php/Admin/Cate/lst"><i class="icon-font">&#xe006;</i>栏目管理</a></li>
                        <li><a href="/test/tp_pro3/index.php/Admin/Article/lst"><i class="icon-font">&#xe005;</i>文章管理</a></li>
                        <li><a href="/test/tp_pro3/index.php/Admin/Link/lst"><i class="icon-font">&#xe052;</i>链接管理</a></li>
                          <li><a href="/test/tp_pro3/index.php/Admin/Message/lst"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                           <li><a href="/test/tp_pro3/index.php/Admin/Job/lst"><i class="icon-font">&#xe012;</i>求职信息</a></li>
                          <!--  <li><a href="design.html"><i class="icon-font">&#xe033;</i>广告管理</a></li>-->
                                             
                        </ul>
                </li>
              <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="/test/tp_pro3/index.php/Admin/Admin/lst""><i class="icon-font">&#xe004;</i>管理员管理 </a></li>
                        <li><a href="/test/tp_pro3/index.php/Admin/System/lst"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                    <li><a href="/test/tp_pro3/index.php/Admin/Privilege/lst"><i class="icon-font">&#xe037;</i>权限列表</a></li>
                        <li><a href="/test/tp_pro3/index.php/Admin/Role/lst"><i class="icon-font">&#xe046;</i>角色列表</a></li>
                        <li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
                
                
               
                
                
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/test/tp_pro3/index.php/Admin/Index/index">首页</a>
            <span class="crumb-step">&gt;</span>
            <a class="crumb-name" href="/jscss/admin/design/">管理员管理</a>
            <span class="crumb-step">&gt;</span><span>新增管理员</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        
                            <tr>
                                <th><i class="require-red">*</i>管理员名称：</th>
                                <td>
                                    <input class="common-text required" name="username" size="50" value="" type="text">
                                </td>
                            </tr>
                           
                           <tr>
                                <th><i class="require-red">*</i>管理员密码：</th>
                                <td>
                                    <input class="common-text required" name="password" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>所属角色：</th>
                                <td>
                                <select name="roleid">
                                    <?php if(is_array($roles)): $i = 0; $__LIST__ = $roles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["rolename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                
                                </td>
                            </tr>
                            
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>
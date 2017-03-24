<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/test/tp_pro3/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/test/tp_pro3/Application/Admin/Public/css/main.css"/>
    <link rel="shortcut icon" href="/test/tp_pro3/Application/Admin/Public/images/favicon.ico" />
    <script type="text/javascript" src="/test/tp_pro3/Application/Admin/Public/js/libs/modernizr.min.js"></script>
    <!--/引入百度ueditor-->
    <script type="text/javascript" src="/test/tp_pro3/Application/Admin/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/test/tp_pro3/Application/Admin/Public/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/test/tp_pro3/Application/Admin/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
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
            <a class="crumb-name" href="/test/tp_pro3/index.php/Admin/Cate/lst">栏目管理</a>
            <span class="crumb-step">&gt;</span><span>修改栏目</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        
                           <tr>
                                <th><i class="require-red">*</i>上级分类：</th>
                                <td>
                                   <select name="parentid">
                                   	 <option value="0" >顶级栏目</option>
                                   		<?php if(is_array($cates_all)): $i = 0; $__LIST__ = $cates_all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$co): $mod = ($i % 2 );++$i; if($cates[parentid] == $co[id]): ?><option value="<?php echo ($co["id"]); ?>" selected = "selected"><?php echo ($co["catename"]); ?></option>
	                                		<?php elseif($cates[id] != $co[id]): ?>
	                                		<option value="<?php echo ($co["id"]); ?>"><?php echo ($co["catename"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                   </select>
                                </td>
                            <tr>
                                <th><i class="require-red">*</i>栏目名称：</th>
                                <td>
                                    <input  name="id"  value="<?php echo ($cates["id"]); ?>" type="hidden">
                                    <input class="common-text required" id="catename" name="catename" size="50" value="<?php echo ($cates["catename"]); ?>" type="text">
                                
                                </td>
                            </tr>
                                                   
                             <tr>
                                <th><i class="require-red">*</i>关键字：</th>
                                <td>
                                    <input class="common-text required" id="catename" name="keywords" size="50" value="<?php echo ($cates["keywords"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>描述：</th>
                                <td>
                                    <textarea rows="3" cols="50" value="<?php echo ($cates["des"]); ?>"  name="des"></textarea> 
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>栏目类别：</th>
                                <td>
	                                <?php if($cates[type] == 1): ?><input class="common-text required"  name="type" size="50" value="1" checked="checked" type="radio">列表
		                                <?php else: ?><input class="common-text required"  name="type" size="50" value="1"  type="radio">列表<?php endif; ?> 
	                                
	                                <?php if($cates[type] == 2): ?><input class="common-text required"  name="type" size="50" value="2" checked="checked" type="radio">单页
		                                <?php else: ?> <input class="common-text required"  name="type" size="50" value="2" type="radio">单页<?php endif; ?> 
	                                <?php if($cates[type] == 3): ?><input class="common-text required"  name="type" size="50" value="3" checked="checked" type="radio">留言
		                                <?php else: ?><input class="common-text required"  name="type" size="50" value="3" type="radio">留言<?php endif; ?>   
	                                <?php if($cates[type] == 4): ?><input class="common-text required"  name="type" size="50" value="4" checked="checked" type="radio">招聘
		                                <?php else: ?><input class="common-text required"  name="type" size="50" value="4"  type="radio">招聘<?php endif; ?>    
	                               
	                              
                                </td>
                            </tr>
                            <tr>
                                <th>缩略图：</th>
                                <td>
                                	
                                       <input id="pic" name="pic" size="50" value="" type="file">
	                                       <?php if($cates[pic] != ''): ?><img src="/test/tp_pro3<?php echo ($cates["pic"]); ?>" height="50" />
	                                		<?php else: ?> 暂无缩略图<?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td>
                                    <textarea id="ueditor-con"  name="content"><?php echo ($cates["content"]); ?></textarea> 
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

<!--/实例化百度ueditor编辑器，并设置默认高宽和id-->
	<script type="text/javascript">
		UE.getEditor('ueditor-con',{initialFrameWidth:1200,initialFrameHeigh:500,});
	</script>
</body>
</html>
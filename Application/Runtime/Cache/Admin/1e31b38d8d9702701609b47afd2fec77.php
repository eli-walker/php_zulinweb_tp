<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/test/tp_pro3/Application/Admin/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/test/tp_pro3/Application/Admin/Public/css/main.css"/>
    <link rel="shortcut icon" href="/test/tp_pro3/Application/Admin/Public/images/favicon.ico" />
    <script type="text/javascript" src="/test/tp_pro3/Application/Admin/Public/js/libs/modernizr.min.js"></script>
    <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script><!--/引入 jQuery-->
    

    
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/test/tp_pro3/index.php/Admin/Index/index">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">栏目管理</span></div>
        </div>
        <!--<div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                                <select name="search-sort" id="">
                                    <option value="">全部</option>
                                    <option value="19">精品界面</option><option value="20">推荐界面</option>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>-->
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action="/test/tp_pro3/index.php/Admin/Cate/sort" >
                <div class="result-title">
                    <div class="result-list">
                        <a href="/test/tp_pro3/index.php/Admin/Cate/add"><i class="icon-font"></i>新增栏目</a>
                         <a  href=""><i class="icon-font"></i>批量删除</a>
                        <a href=""><i class="icon-font"></i>更新排序</a>
                        <input class="icon-font" value='更新排序' type='submit' />
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%" ><input id="checks" class="check" name="" type="checkbox" ></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>栏目名称</th>
                            <th>栏目类型</th>
                            <th>缩略图</th>
                            <th>操作</th>
                        </tr>
                        
                     <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input class="check" name="id[]" value="59" type="checkbox" ></td>
                            <td width="5%">
                                <input class="common-input sort-input" name="<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["sort"]); ?>" type="text">
                            </td>
                            <td width="5%"><?php echo ($vo["id"]); ?></td>
                            <td ><?php echo (str_repeat("————",$vo['level'])); echo ($vo["catename"]); ?> </td>
                              <td >								                            
									 <?php switch($vo["type"]): case "1": ?>列表<?php break;?>
									    <?php case "2": ?>单页<?php break;?>
									    <?php case "3": ?>留言<?php break;?>
									    <?php case "4": ?>招聘<?php break;?>
									    <?php default: ?>暂无<?php endswitch;?>
                            
                              </td>
                            <td >
	                            <?php if($vo['pic'] != ''): ?><img src="/test/tp_pro3<?php echo ($vo["pic"]); ?>" height="50" /> 
	                           		<?php else: ?>暂无缩略图<?php endif; ?>             
                            </td>
                            <td width="20%">
                                <a class="link-update" href="/test/tp_pro3/index.php/Admin/Cate/edit/id/<?php echo ($vo["id"]); ?>">修改</a>
                                <a class="link-del" href="/test/tp_pro3/index.php/Admin/Cate/del/id/<?php echo ($vo["id"]); ?>" onclick="return confirm('是否确定删除栏目？')">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    
                    </table>
                   <div class="list-page"><?php echo ($page); ?></div> 
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>


<script >
		$(document).ready(function(){
			  $("#checks").click(function(){
			     if($("#checks").attr("checked")){
			            $(".check").removeAttr("checked");}
			          else{
			            $(".check").attr("checked","checked");};    
			  });
		
			});
</script>

</body>
</html>
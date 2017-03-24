<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>人才招聘_这里是您的网站名称</title>
<meta name="keywords" content="这里是您的网站名称" />
<meta name="description" content="这里是您的网站名称"/>

<meta name="Author" content="024" />

<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<script type="text/javascript" src="/test/tp_pro3/Application/Home/Public/pc/style/urlredirect.js"></script>
<LINK href="/test/tp_pro3/Application/Home/Public/pc/style/style.css" rel=stylesheet>
<LINK href="/test/tp_pro3/Application/Home/Public/pc/style/jbox.css" rel=stylesheet>
<script language="JavaScript" type="text/javascript" src="/test/tp_pro3/Application/Home/Public/pc/style/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/tp_pro3/Application/Home/Public/pc/style/functions.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/tp_pro3/Application/Home/Public/pc/style/validForm/FormValid.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/tp_pro3/Application/Home/Public/pc/style/jbox/jquery.jBox-2.3.min.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/tp_pro3/Application/Home/Public/pc/style/search.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/tp_pro3/Application/Home/Public/pc/style/menu.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/tp_pro3/Application/Home/Public/pc/style/jQselect.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/tp_pro3/Application/Home/Public/pc/style/slides.min.jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="/test/tp_pro3/Application/Home/Public/pc/style/jquery.touchSlider.js"></script>
<script type="text/javascript"><!--ibanner-->

$(document).ready(function () {
	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
		},function(){
		$("#btn_prev,#btn_next").fadeOut()
		})
	$dragBln = false;
	$(".main_image").touchSlider({
		flexible : true,
		speed : 200,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e) {
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	})
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	})
	$(".main_image a").click(function() {
		if($dragBln) {
			return false;
		}
	})
	timer = setInterval(function() { $("#btn_next").click();}, 5000);
	$(".main_visual").hover(function() {
		clearInterval(timer);
	}, function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
	$(".main_image").bind("touchstart", function() {
		clearInterval(timer);
	}).bind("touchend", function() {
		timer = setInterval(function() { $("#btn_next").click();}, 5000);
	})
});
</script>
<script><!--pro-->
		$(function(){
			// Set starting slide to 1
			var startSlide = 1;
			// Get slide number if it exists
			if (window.location.hash) {
				startSlide = window.location.hash.replace('#','');
			}
			// Initialize Slides
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				generatePagination: true,
				play: 0,
				pause: 2500,
				hoverPause: true,
				// Get the starting slide
				start: startSlide,
				animationComplete: function(current){
					// Set the slide number as a hash
					//window.location.hash = '#' + current;
				}
			});
		});
</script>
<!--[if IE 6]><script type="text/javascript" src="js/DD_belatedPNG.js"></script><![endif]-->
</head>
<body>
<div class="fixed"> <a href="book.php" title="留言" class="barbook"></a> <a href="javascript:;" title="二维码" class="codepic"></a> <a href="javascript:;" title="返回顶部" class="backup"></a>
  <div> <img src="http://0001543.ks.panguweb.cn/upfile/qr/qrcode.png" alt="这里是您的网站名称" class="code" /> </div>
</div>
<div class="head">
  <div class="headtop">
      <div class="fra1">
          <a href="index.php" title="这里是您的网站名称"><img src="/test/tp_pro3/Application/Home/Public/pc/images/logo.png" alt="这里是您的网站名称" /></a>
            <div class="head-right">
            <span><font>租车<br />热线 </font><label>+86-0000-96877</label></span>
            <div class="search">
               <form id="search" name="search" method="get" action="/test/tp_pro3/index.php/Home/Search/">
               
                <input type="text" class="text pngFix" name="kws" id="kws" value="请输入搜索关键词"/>
                <div class="select pngFix">
                 <select id="rid" style="display: none" name="cateid">
                                         <option value="69" selected="selected">新闻资讯</option>
                                         <option value="68" >车辆展示</option>
                                         <option value="70" >主要车型</option>
                                         <option value="80" >资质荣誉</option>
                                     </select>
                </div>
                <input type="submit" title="搜索" style="cursor:pointer;" class="button" value=""/>
            </form>
            <script type=text/javascript>
                jQuery(document).ready(function() {
                    jQuery("#rid").selectbox();
                });
            </script> 
            </div>
            </div>
        </div>
    </div>
  <div class="nav">
      <ul>
          <li><a title="网站首页" href="/test/tp_pro3/index.php" class="">网站首页</a></li>
          <?php if(is_array($navres)): $i = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a title="<?php echo ($vo["catename"]); ?>" href="/test/tp_pro3/index.php/Home/<?php if($vo['type'] == 1): ?>Arlist<?php elseif($vo['type'] == 2): ?>Page<?php elseif($vo['type'] == 3): ?>Message<?php elseif($vo['type'] == 4): ?>Zplist<?php elseif($vo['type'] == 5): ?>Carlist<?php elseif($vo['type'] == 6): ?>Ry<?php elseif($vo['type'] == 7): ?>Job<?php endif; ?>/index/cateid/<?php echo ($vo["id"]); ?>" class=""><?php echo ($vo["catename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    
</div>
<script type="text/javascript">
function ckvaild (inp) {
	$.ajax({type:"GET", url:"http://0001543.ks.panguweb.cn/ajax.php?r="+Math.random()+'&action=ckvaild&vaild='+inp.value, dataType:"text",async:false,success:function (msg){
		r = msg;
	}}); 
	if (r==0) {
		$("#verify").attr("src",'../valid.php?rand='+Math.random()*5);
		return false;
	} else {
		return true;
	}
}
</script>
<div class="fy" style=" background:url(http://0001543.ks.panguweb.cn/upfile/ads/20150804113438-369103644.jpg) center top no-repeat;">
    <div class="fra">
  <div class="fyLeft">
        
                <div class="l_pro">
      <div class="l_pro_t"><?php echo ($selftop); ?></div>
        <ul class="l_procon">
        
        
        
          <?php foreach($son2 as $k=>$v): $cateid=$v['id']; if($contro){ $url="/test/tp_pro3/index.php/Home/carlist/index/cateid/$cateid"; }else{ $url="/test/tp_pro3/index.php/Home/Job/index/cateid/$cateid"; } ?>

          <li class="proOne"><a title="<?php echo $v['name'];?>" href="<?php echo $url;?>"><?php echo $v['name'];?></a>
            
            <ul>
            <?php if($v['id']==$_GET['cateid'] || $v['id']==$son3pid):?>
              <?php foreach($son3 as $k1=>$v1): ?>
            <li><a style="padding-left:50px;" title="<?php echo $v1['name'];?>" href="/test/tp_pro3/index.php/Home/Job/index/cateid/<?php echo $v1['id'];?>"><?php echo $v1['name'];?></a></li>
              <?php endforeach;?>
          <?php endif;?>
            </ul>

          </li>
        <?php endforeach;?>
        </ul>
                </div>
               <div class="fl-contact">
                  <div class="l_pro_t1">联系我们</div>
                    <p><img width="200" height="98" alt="联系我们" src="/test/tp_pro3/Application/Home/Public/pc/images/cont.jpg"></p>
                    <div class="fl-con">电话：<?php echo (C("PHONE")); ?> <br>
传真：<?php echo (C("FAX")); ?> <br>
地址：<?php echo (C("ADDRESS")); ?> <br>
邮箱：<?php echo (C("EMAIL")); ?> </div>
               </div> 

      </div>
  <div class="fyRight">
      <div class="title"> <span class="fl"><?php echo ($selftop); ?></span> <span class="fr">当前位置：<a href="/test/tp_pro3/index.php" title="首页">首页</a> > 
                        <?php if(is_array($pres)): $i = 0; $__LIST__ = $pres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i != count($pres)): ?><a href="/test/tp_pro3/index.php/Home/<?php if($vo['type'] == 1): ?>Arlist<?php elseif($vo['type'] == 2): ?>Page<?php elseif($vo['type'] == 3): ?>Message<?php elseif($vo['type'] == 4): ?>Zplist<?php elseif($vo['type'] == 5): ?>Carlist<?php elseif($vo['type'] == 6): ?>Ry<?php elseif($vo['type'] == 7): ?>Job<?php endif; ?>/index/cateid/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a> &gt;
                        <?php else: ?>
                        <font><?php echo ($vo["name"]); ?></font><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </span></div>
      <div class="hrfra">
           <form action="" id="hrform" name="hrform" method="post">
        <table width="95%" cellspacing="0" cellpadding="3" border="0" align="center" class="hr"> 
            <tbody><tr>
            <td height="40" align="center" class="bord" colspan="4"><h2>求职表</h2></td>
            </tr>
            <tr>
            <td height="25" align="right" class="bord"><span class="c_red">*</span>应聘职位：</td>
            <td height="25" align="left" class="bord" colspan="3">
            <input type="text" value="<?php echo ($title); ?>" readonly="readonly" maxlength="30" size="50" style="color:#999" name="title">
            </td>
            </tr>
            <tr>
            <td height="25" align="right" class="bord"><span class="c_red">*</span>真实姓名：</td>
            <td height="25" align="left" class="bord">
            <input type="text" errmsg="请输入真实姓名！" valid="required" maxlength="30" size="15" name="name">
            </td>
            <td height="25" align="right" class="bord">性别：</td>
            <td height="25" align="left" class="bord">
            <input type="radio" checked="checked" value="男" name="sex">
            男&#12288;
            <input type="radio" value="女" name="sex">
            女 </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">民族：</td>
            <td width="27%" height="25" align="left" class="bord">
            <select name="nation">
            <option value="">---请选择---</option>
            <option value="汉族">汉族</option>
            <option value="蒙古族">蒙古族</option>
            <option value="回族">回族</option>
            <option value="藏族">藏族</option>
            <option value="维吾尔族">维吾尔族</option>
            <option value="苗族">苗族</option>
            <option value="彝族">彝族</option>
            <option value="壮族">壮族</option>
            <option value="布依族">布依族</option>
            <option value="朝鲜族">朝鲜族</option>
            <option value="满族">满族</option>
            <option value="侗族">侗族</option>
            <option value="瑶族">瑶族</option>
            <option value="白族">白族</option>
            <option value="土家族">土家族</option>
            <option value="哈尼族">哈尼族</option>
            <option value="哈萨克族">哈萨克族</option>
            <option value="傣族">傣族</option>
            <option value="黎族">黎族</option>
            <option value="傈僳族">傈僳族</option>
            <option value="佤族">佤族</option>
            <option value="畲族">畲族</option>
            <option value="高山族">高山族</option>
            <option value="拉祜族">拉祜族</option>
            <option value="水族">水族</option>
            <option value="东乡族">东乡族</option>
            <option value="纳西族">纳西族</option>
            <option value="景颇族">景颇族</option>
            <option value="柯尔克孜族">柯尔克孜族</option>
            <option value="土族">土族</option>
            <option value="达斡尔族">达斡尔族</option>
            <option value="仡佬族">仡佬族</option>
            <option value="羌族">羌族</option>
            <option value="布朗族">布朗族</option>
            <option value="撒拉族">撒拉族</option>
            <option value="毛难族">毛难族</option>
            <option value="仫佬族">仫佬族</option>
            <option value="锡伯族">锡伯族</option>
            <option value="阿昌族">阿昌族</option>
            <option value="普米族">普米族</option>
            <option value="塔吉克族">塔吉克族</option>
            <option value="怒族">怒族</option>
            <option value="乌兹别克族">乌兹别克族</option>
            <option value="俄罗斯族">俄罗斯族</option>
            <option value="鄂温克族">鄂温克族</option>
            <option value="崩龙族">崩龙族</option>
            <option value="保安族">保安族</option>
            <option value="裕固族">裕固族</option>
            <option value="京族">京族</option>

            <option value="塔塔尔族">塔塔尔族</option>
            <option value="独龙族">独龙族</option>
            <option value="鄂伦春族">鄂伦春族</option>
            <option value="赫哲族">赫哲族</option>
            <option value="门巴族">门巴族</option>
            <option value="珞巴族">珞巴族</option>
            </select>
            </td>
            <td width="17%" height="25" align="right" class="bord">出生日期：</td>
            <td width="42%" height="25" align="left" class="bord">
            <input type="text" size="15" name="age"> </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">婚姻状况：</td>
            <td width="27%" height="25" align="left" class="bord">
            <select name="marry">
            <option value="">---请选择---</option>
            <option value="未婚">未婚</option>
            <option value="已婚">已婚</option>
            </select>
            </td>
            <td width="17%" height="25" align="right" class="bord">有无子女：</td>
            <td width="42%" height="25" align="left" class="bord">
            <select name="child">
            <option value="">---请选择---</option>
            <option value="有">有</option>
            <option value="无">无</option>
            </select>
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">籍贯：</td>
            <td width="27%" height="25" align="left" class="bord">
            <select name="bplace">
            <option value="">---请选择---</option>
            <option value="北京市">北京市</option>
            <option value="天津市">天津市</option>
            <option value="河北省">河北省</option>
            <option value="山西省">山西省</option>
            <option value="内蒙古">内蒙古</option>
            <option value="辽宁省">辽宁省</option>
            <option value="吉林省">吉林省</option>
            <option value="黑龙江">黑龙江</option>
            <option value="上海市">上海市</option>
            <option value="江苏省">江苏省</option>
            <option value="浙江省">浙江省</option>
            <option value="安徽省">安徽省</option>
            <option value="福建省">福建省</option>
            <option value="江西省">江西省</option>
            <option value="山东省">山东省</option>
            <option value="河南省">河南省</option>
            <option value="湖北省">湖北省</option>
            <option value="湖南省">湖南省</option>
            <option value="广东省">广东省</option>
            <option value="广  西">广  西</option>
            <option value="海南省">海南省</option>
            <option value="重庆市">重庆市</option>
            <option value="四川省">四川省</option>
            <option value="贵州省">贵州省</option>
            <option value="云南省">云南省</option>
            <option value="西  藏">西  藏</option>
            <option value="陕西省">陕西省</option>
            <option value="甘肃省">甘肃省</option>
            <option value="青海省">青海省</option>
            <option value="宁  夏">宁  夏</option>
            <option value="新  疆">新  疆</option>
            <option value="台湾省">台湾省</option>
            <option value="香  港">香  港</option>
            <option value="澳  门">澳  门</option>
            </select>
            </td>
            <td width="17%" height="25" align="right" class="bord">户口所在地：</td>
            <td width="42%" height="25" align="left" class="bord">
            <select name="address">
            <option value="">---请选择---</option>
            <option value="北京市">北京市</option>
            <option value="天津市">天津市</option>
            <option value="河北省">河北省</option>
            <option value="山西省">山西省</option>
            <option value="内蒙古">内蒙古</option>
            <option value="辽宁省">辽宁省</option>
            <option value="吉林省">吉林省</option>
            <option value="黑龙江">黑龙江</option>
            <option value="上海市">上海市</option>
            <option value="江苏省">江苏省</option>
            <option value="浙江省">浙江省</option>
            <option value="安徽省">安徽省</option>
            <option value="福建省">福建省</option>
            <option value="江西省">江西省</option>
            <option value="山东省">山东省</option>
            <option value="河南省">河南省</option>
            <option value="湖北省">湖北省</option>
            <option value="湖南省">湖南省</option>
            <option value="广东省">广东省</option>
            <option value="广  西">广  西</option>
            <option value="海南省">海南省</option>
            <option value="重庆市">重庆市</option>
            <option value="四川省">四川省</option>
            <option value="贵州省">贵州省</option>
            <option value="云南省">云南省</option>
            <option value="西  藏">西  藏</option>
            <option value="陕西省">陕西省</option>
            <option value="甘肃省">甘肃省</option>
            <option value="青海省">青海省</option>
            <option value="宁  夏">宁  夏</option>
            <option value="新  疆">新  疆</option>
            <option value="台湾省">台湾省</option>
            <option value="香  港">香  港</option>
            <option value="澳  门">澳  门</option>
            </select>
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">学历：</td>
            <td height="25" align="left" class="bord">
            <select name="education">
            <option selected="selected" value="">---请选择---</option>
            <option value="博士">博士</option>
            <option value="硕士">硕士</option>
            <option value="本科">本科</option>
            <option value="大专">大专</option>
            <option value="职高及中专">职高及中专</option>
            <option value="高中以下">高中以下</option>
            </select>
            </td>
            <td height="25" align="right" class="bord"><span class="STYLE2">外语语种及程度：</span></td>
            <td height="25" align="left" class="bord">
            <input type="text" maxlength="35" size="18" name="foreign">
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord"><span class="c_red">*</span>移动电话：</td>
            <td width="27%" height="25" align="left" class="bord">
            <input type="text" errmsg="请输入移动电话！|移动电话格式不正确！" valid="required|isMobile" maxlength="11" size="20" name="mobile">
            </td>
            <td width="17%" height="25" align="right" class="bord">电子邮件：</td>
            <td width="42%" height="25" align="left" class="bord">
            <input type="text" errmsg="电子邮件格式不正确！" valid="isEmail" maxlength="35" size="25" name="email">
            </td>
            </tr>
            <tr>
            <td height="25" align="right" class="bord">身份证号：</td>
            <td height="25" align="left" class="bord">
            <input type="text" errmsg="身份证号码格式不正确！" valid="isIdCard" value="" maxlength="36" name="idnums">
            </td>
            <td height="25" align="right" class="bord"><span class="STYLE2">现住址：</span></td>
            <td height="25" align="left" class="bord">
            <input type="text" maxlength="20" size="40" name="address_now">
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">可到职日期：</td>
            <td height="25" align="left" class="bord" colspan="3">
            <select name="slim">
            <option selected="selected" value="随时">---随时---</option>
            <option value="1周内">1周内</option>
            <option value="1月内">1月内</option>
            </select>
            </td>
            </tr>
            <tr>
            <td width="14%" height="25" align="right" class="bord">备注：</td>
            <td height="25" align="left" class="bord" colspan="3">
            <textarea rows="5" cols="60" name="content"></textarea>
            </td>
            </tr>
            
            <tr>
            <td width="14%" height="25" align="right" class="bord"><span class="c_red">*</span>验证码：</td>
            <td height="25" align="left" class="bord" colspan="3">
                <input type="text" border="0" maxlength="4" errmsg="请输入验证码|验证码输入有误，请重新输入" valid="required|custom" custom="ckvaild" id="vaild" name="verify" size="12">
               <img align="absmiddle" onclick="this.src='/test/tp_pro3/index.php/Home/Job/code/'+Math.random();" style="cursor:pointer;" title="看不清？点击一下！" alt="看不清？点击一下！" src="/test/tp_pro3/index.php/Home/Job/code" style="height:60px;" id="verify"> 
            </td>
            </tr>
        </tbody></table>
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody><tr>
            <td height="76" align="center">
            <input type="submit" onclick="return validator(document.hrform);" title="提交求职表" value="提交求职表" style="cursor:pointer;" class="hr_btn" name="hrsbtn">
            </td>
            </tr>
        </tbody></table>
        </form>
        </div>
    </div>
</div>
</div>
<div class="clear"></div>
<div class="foot">
  <div class="foot-map">
      <div class="foot-mleft">
          <div class="site">网站地图（<a target="_blank" href="sitemap.xml">xml</a> / <a target="_blank" href="sitemap.html">html</a>）</div>        
            <ul> 
            <li>  
            <a title="网站首页" href="/test/tp_pro3/index.php">网站首页</a> 
             <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k<4):?>
             <a title="<?php echo ($vo["name"]); ?>" href="/test/tp_pro3/index.php/Home/<?php if($vo['type'] == 1): ?>Arlist<?php elseif($vo['type'] == 2): ?>Page<?php elseif($vo['type'] == 3): ?>Message<?php elseif($vo['type'] == 4): ?>Zplist<?php elseif($vo['type'] == 5): ?>Carlist<?php elseif($vo['type'] == 6): ?>Ry<?php elseif($vo['type'] == 7): ?>Job<?php endif; ?>/index/cateid/<?php echo ($vo["id"]); ?>" class=""><?php echo ($vo["catename"]); ?></a>
           <?php endif; endforeach; endif; else: echo "" ;endif; ?>
              </li>                                                                                                                                                                                    
             <li>             
                 <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k>3&&$k<8):?>
             <a title="<?php echo ($vo["catename"]); ?>" href="/test/tp_pro3/index.php/Home/<?php if($vo['type'] == 1): ?>Arlist<?php elseif($vo['type'] == 2): ?>Page<?php elseif($vo['type'] == 3): ?>Message<?php elseif($vo['type'] == 4): ?>Zplist<?php elseif($vo['type'] == 5): ?>Carlist<?php elseif($vo['type'] == 6): ?>Ry<?php elseif($vo['type'] == 7): ?>Job<?php endif; ?>/index/cateid/<?php echo ($vo["id"]); ?>" class=""><?php echo ($vo["catename"]); ?></a>
           <?php endif; endforeach; endif; else: echo "" ;endif; ?>                                                                                                              
             
             </li>
            
             <li>  
                                                                                                                                                                                                                                       
             <?php if(is_array($navres)): $k = 0; $__LIST__ = $navres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k>7):?>
             <a title="<?php echo ($vo["name"]); ?>" href="/test/tp_pro3/index.php/Home/<?php if($vo['type'] == 1): ?>Arlist<?php elseif($vo['type'] == 2): ?>Page<?php elseif($vo['type'] == 3): ?>Message<?php elseif($vo['type'] == 4): ?>Zplist<?php elseif($vo['type'] == 5): ?>Carlist<?php elseif($vo['type'] == 6): ?>Ry<?php elseif($vo['type'] == 7): ?>Job<?php endif; ?>/index/cateid/<?php echo ($vo["id"]); ?>" class=""><?php echo ($vo["catename"]); ?></a>
           <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                      </li>
      
        
            </ul>
        </div>
        <div class="foot-tel"><p>热线电话<br><label><?php echo (C("PHONE")); ?> </label></p><span>7x24小时全国客服热线，全年无休</span></div>
        <p class="foot-er"><img width="123" height="121" alt="" src="http://0001543.ks.panguweb.cn/images/er.gif"><br>扫一扫关注我们</p>
  </div>
  <div class="clear"></div>
  <div class="footlink">
    <b class="name">友情链接： </b>
    <div class="linka"> 
              <?php if(is_array($linkres)): $i = 0; $__LIST__ = $linkres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a target="_blank" href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div>
    <div class="foot-con">
        <div class="foot-left">电话：<?php echo (C("PHONE")); ?>     传真：<?php echo (C("FAX")); ?>     地址：<?php echo (C("ADDRESS")); ?>     版权所有：<?php echo (C("COPY")); ?><br>
    技术支持：<a title="盘古网络－提供基于互联网的全套解决方案" target="_blank" href="http://www.pangu.us">盘古网络</a><a title="盘古建站－快速开展网络营销的利器" target="_blank" href="http://ks.pangu.us">【盘古建站】</a>ICP备案编号：<a target="_blank" title="备********号" href="http://www.miitbeian.gov.cn/">备********号</a></div>
    <div class="newsshare"><div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1461319439588"><a title="分享到新浪微博" data-cmd="tsina" class="bds_tsina" href="#"></a><a title="分享到腾讯微博" data-cmd="tqq" class="bds_tqq" href="#"></a><a title="分享到QQ好友" data-cmd="sqq" class="bds_sqq" href="#"></a><a href="#" title="分享到百度新首页" data-cmd="bdhome" class="bds_bdhome"></a></div>
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
</div>
</div>

    </body>
</html>
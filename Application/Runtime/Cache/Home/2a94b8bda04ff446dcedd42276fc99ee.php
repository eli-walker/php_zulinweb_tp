<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>运泽汽车租赁</title>
<meta name="keywords" content="运泽汽车租赁" />
<meta name="description" content="运泽汽车租赁"/>

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
  <div> <img src="/test/tp_pro3/Application/Home/Public/pc/images/qrcode.png" alt="这里是您的网站名称" class="code" /> </div>
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
<div class="clear"></div>
<div class="banner">
  <div class="main_visual">
    

    <div class="main_image">
    
      <ul>
                        <li><span class="img_3" style="background:url(/test/tp_pro3/Application/Home/Public/pc/images/20150804112848-251193540.jpg) no-repeat top;"></span></li>
                
                          <li><span class="img_3" style="background:url(/test/tp_pro3/Application/Home/Public/pc/images/20150804112945-946058568.jpg) no-repeat top;"></span></li>
                
                          <li><span class="img_3" style="background:url(/test/tp_pro3/Application/Home/Public/pc/images/20150804112838-1533884976.jpg) no-repeat top;"></span></li>
                
              </ul>
      <a href="javascript:;" id="btn_prev"></a> <a href="javascript:;" id="btn_next"></a> </div>
  </div>
</div>
<div class="clear"></div>

<div class="case">
	<div class="fra1">
   	  <div class="caseleft">
       	<p class="name"><b>主要车型</b><span>main models</span></p>
            <div class="casel-in">
              大众宝来、马自达、华晨宝马、奥迪Q7、奥迪Q5、速腾迈腾、别克商务、吉利汽车、奔驰、凯迪拉克          </div>
          <a class="case-more" title="查看更多" href="case.php">查看更多</a>
      </div>
      <div class="caseright">
      		<div class="noticecon"><b>最新公告：</b>
              <marquee scrollamount="2" scrolldelay="5" onMouseOut="this.start()" onMouseOver="this.stop()">
              诚信为本：市场在变，诚信永远不变...              </marquee>
            </div>
                        <ul class="caseul">
                  <?php if(is_array($mainres)): $i = 0; $__LIST__ = $mainres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
	                	<a href="/test/tp_pro3/index.php/Home/Article/index/arid/<?php echo ($vo["id"]); ?>" title="车型：车型展示名称">
	                	<img src="/test/tp_pro3<?php echo ($vo["pic"]); ?>" alt="车型：<?php echo ($vo["title"]); ?>" width="215" height="161" />
		                    <span>车型：<?php echo ($vo["title"]); ?></span>
		                    <p>日租：<?php echo ($vo["rizu"]); ?>元/天</p>
	                	</a>
               		 </li><?php endforeach; endif; else: echo "" ;endif; ?>
                       
                            </ul>
                  </div>
    </div>
</div>
<div class="clear"></div>
<div class="product">
<script type="text/javascript" src="/test/tp_pro3/Application/Home/Public/pc/js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.zoombut').lightBox();
    });
</script>
	<div class="fra1">
    	<p class="pro-name"><b>车辆展示</b><span>Vehicles Show</span></p>
        <div id="container">
      <div id="example">
        <div id="slides">
          <div class="slides_container" >
                                 <div class="slide">            
               	<ul class="product-ul">
                <?php if(is_array($carres)): $i = 0; $__LIST__ = $carres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href="/test/tp_pro3/index.php/Home/Article/index/arid/<?php echo ($vo["id"]); ?>" title="车型：<?php echo ($vo["title"]); ?>">
                        	<p class="casetitle" ><span title="车型：<?php echo ($vo["title"]); ?>" href="/test/tp_pro3/Application/Home/Public/pc/images/20150810101106-46672245394438504.jpg" class="zoombut"></span><span class="jianjie">车型：<?php echo ($vo["title"]); ?></span> </p> 
                            <img src="/test/tp_pro3<?php echo ($vo["pic"]); ?>" width="245" height="184" alt="车型：<?php echo ($vo["title"]); ?>" />
                            <p class="wor"><span>车型：<?php echo ($vo["title"]); ?></span><label>日租：<?php echo ($vo["rizu"]); ?>元/天</label></p>
                        </a>
                     </li><?php endforeach; endif; else: echo "" ;endif; ?>            
            	</ul>
              
            </div>
                        </div>
          <a href="#" class="prev" title="prev">&nbsp;&nbsp;</a><a href="" class="next" title="next">&nbsp;</a> </div>
      </div>
    </div>
    <div class="clear"></div>
    <a class="pro-more" href="product.php" title="查看更多">查看更多</a>
    </div>
</div>
<div class="clear"></div>
<div class="news">
	<div class="fra">
    	<div class="about-left">
        	<p class="ab-name"><span>a b o u t&nbsp;&nbsp; u s</span><b>关于我们</b></p> 
            <p class="ab-con">　　租车运泽网络，一流的百度产品推广服务运营商，致力于在互联网时代帮助中国企业进行营销方式的革命，并使他们在这场营销变革中抢占先机。　<br />
　　运泽网络成立于2003年，现有员工2000多人，下设20多家子公司，业务覆盖河北、辽宁、吉林三省，提供域名注册、虚拟主机、企业邮局、网站建设 ...</p>
			<a class="ab-more" href="about.php" title="查看更多">查看更多</a>
        </div>
        <div class="news-right">
        	<p class="news-name"><span>n e w s</span><b>新闻资讯</b></p> 
                         <ul class="news-ul">
                         <?php if(is_array($arres)): $i = 0; $__LIST__ = $arres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                	<span class="num">0<?php echo ($i); ?></span>
                    <a href="/test/tp_pro3/index.php/Home/Article/index/arid/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["title"]); ?>">
                    	<p><?php echo ($vo["title"]); ?></p>
                        <span><?php echo (date("Y-m-d",$vo["time"])); ?></span>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>            
                            </ul>
                         <a class="news-more" href="news.php" title="查看更多">查看更多</a>
        </div>
    </div>
</div>
<div class="z-notice">
	<a href="notice.php" title="租车须知">租车须知</a>
	<img src="http://0001543.ks.panguweb.cn/upfile/ads/20150804152838-947160084.jpg" alt="租车" width="1000" height="250" />
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
    技术支持：<a title="运泽网络－提供基于互联网的全套解决方案" target="_blank" href="">运泽网络</a><a title="运泽网络" target="_blank" href="">运泽网络</a>ICP备案编号：<a target="_blank" title="备********号" href="http://www.miitbeian.gov.cn/">备********号</a></div>
    <div class="newsshare"><div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1461319439588"><a title="分享到新浪微博" data-cmd="tsina" class="bds_tsina" href="#"></a><a title="分享到腾讯微博" data-cmd="tqq" class="bds_tqq" href="#"></a><a title="分享到QQ好友" data-cmd="sqq" class="bds_sqq" href="#"></a><a href="#" title="分享到百度新首页" data-cmd="bdhome" class="bds_bdhome"></a></div>
    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div>
</div>
</div>

    </body>
</html>
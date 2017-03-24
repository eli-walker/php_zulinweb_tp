$(document).ready(function(){
	//--返回顶部代码
	$('.codepic').hover(function(){
		$('.code').fadeIn()},
	   function(){$('.code').fadeOut()
	});
	$('.backup,.topbut').click(function(){
        $('body,html').animate({scrollTop:0},500)
    });
    $(".backup").hide();
    $(function () {
        $(window).scroll(function(){
            if ($(window).scrollTop()>500){
                $(".backup").fadeIn(1000);
            }else{
                $(".backup").fadeOut(1000);
            }
        })
     
   })
   //---返回顶部代码    
   //--导航下拉代码
   $(".nav ul li").mouseover(function(){
	    $(this).find('p').stop(true,true).slideDown();
		$(this).children("a").addClass("cur");
    })

	$('.nav ul li').mouseleave(function(){
	     $(this).find('p').stop(true,true).slideUp('fast');
	     $(this).children("a").removeClass("cur");
	});
	//--装修设计左边大图文字显示效果
	$('.iproimg1').hover(function(){

	$(this).children('p').slideDown();
	},function(){
	
	$(this).children('p').slideUp();
	});
   //--首页图片放大
   casemain();
		function casemain(){
		$('.casetitle').css('display','none');
		$('.product-ul li a').hover(function(){
			$(this).children('.casetitle').show()},function(){$(this).children('.casetitle').hide();
			
	
	})
	$('.casetitle1').css('display','none');
		$('.proul li a').hover(function(){
			$(this).children('.casetitle1').show()},function(){$(this).children('.casetitle1').hide();
			
	
	})
	
	}
 //--首页设计团队
   $('.team li:last').css('margin',0);
	$('.team li a').hover(function(){

	$(this).children('p').slideDown();
	},function(){
	
	$(this).children('p').slideUp();
	});
	
	//--搜索
	
});

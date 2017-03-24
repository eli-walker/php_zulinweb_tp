
//---上一页
  $(function() {
                var ie6 = /msie 6/i.test(navigator.userAgent),
                dv = $('#fix'),
                st;
                dv.attr('otop', dv.offset().top); //存储原来的距离顶部的距离
                $(window).scroll(function() {
                    st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
                    if (st >= parseInt(dv.attr('otop'))) {
                        if (ie6) { //IE6不支持fixed属性，所以只能靠设置position为absolute和top实现此效果
                            dv.css({
                                position: 'absolute',
                                top: st
                            });
                        } else if (dv.css('position') != 'fixed') dv.css({
                            'position': 'fixed',
                            top: 0
                        });
                    } else if (dv.css('position') != 'static') dv.css({
                        'position': 'static'
                    });
                });
            });
//----下一页
$(function() {
                var ie6 = /msie 6/i.test(navigator.userAgent),
                dv = $('#fix1'),
                st;
                dv.attr('otop', dv.offset().top); //存储原来的距离顶部的距离
                $(window).scroll(function() {
                    st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
                    if (st >= parseInt(dv.attr('otop'))) {
                        if (ie6) { //IE6不支持fixed属性，所以只能靠设置position为absolute和top实现此效果
                            dv.css({
                                position: 'absolute',
                                top: st
                            });
                        } else if (dv.css('position') != 'fixed') dv.css({
                            'position': 'fixed',
                            top: 0
                        });
                    } else if (dv.css('position') != 'static') dv.css({
                        'position': 'static'
                    });
                });
            });


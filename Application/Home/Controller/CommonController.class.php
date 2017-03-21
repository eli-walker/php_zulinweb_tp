<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    
    public function __construct()
    {
        parent::__construct(); //执行父类的构造方法
        $this->cates();
        $this->links();
        $this->articles_new();
    }
    
    public function cates(){     //获取栏目数据，用于导航栏
	    $cate=D('cate');
        $cateres=$cate->order('sort asc')->select();
        $this->assign('cateres',$cateres);   
    }
    
    public function links(){     //获取链接数据，用于友情链接
	    $link=D('link');
        $links=$link->select();
        $this->assign('links',$links);   
    }
    
    public function articles_new(){     //获取最近发布的文章，用于最新发表
	    $article=D('article');
        $articles=$article->order('time desc')->limit(5)->select();
        $this->assign('articles_new',$articles);   
    }
    
}
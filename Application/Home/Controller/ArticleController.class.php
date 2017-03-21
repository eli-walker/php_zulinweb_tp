<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

class ArticleController extends CommonController {
    public function index(){
	$this->articles_one();
    $this->get_url();
	$this->display();
    }
    
    
    public function articles_one(){     //获取所选的一篇文章
    
        $article=D('ArticleView');
        
        $articles_one=$article->find(I('id'));
        
        $cateid=$articles_one['cateid'];    //文章所属的栏目id
        
        $map1['id']=array('lt',I('id'));  //查询条件  id 小于当前文章id
        $map1['cateid']=array('eq',$cateid);  //查询条件 cateid与当前文章相同
        
        $map2['id']=array('gt',I('id'));  //查询条件  id 大于当前文章id
        $map2['cateid']=array('eq',$cateid);  //查询条件    cateid与当前文章相同
        
        $articles_pre=D('ArticleView')->where($map1)->order('id desc')->find();// 查询上一篇文章
        $articles_nex=D('ArticleView')->where($map2)->order('id asc')->find();// 查询下一篇文章
        
        //  array('id'=>array('gt',('id')),)
        
        $this->assign('articles_pre',$articles_pre);// 传递上一篇文章
        $this->assign('articles_nex',$articles_nex);// 传递下一篇文章
        $this->assign('articles_one',$articles_one);// 传递当前文章
      
    }
    
     public function get_url(){     //获取页面的完整url
    
        $sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
        $php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
        $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
        $relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self.(isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : $path_info);
        //return $sys_protocal.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '').$relate_url;
        
        $get_url=$sys_protocal.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '').$relate_url;
        $this->assign('get_url',$get_url);// 传递当前页面的完整url
      
    }
    
}
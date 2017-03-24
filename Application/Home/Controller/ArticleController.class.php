<?php
namespace Home\Controller;

class ArticleController extends CommonController {
    public function index(){
    	$arid=I('arid');
    	$article=D('article');
    	$articles=$article->find($arid);
    	$this->assign('articles',$articles);
    	//1 2 3 4 5 6 11 15 16 18 19
    	//上一页
    	$front=$article->where("id<".$arid)->order('id desc')->limit('1')->find();
    	if($front){
    		$furl=__CONTROLLER__.'/index/arid/'.$front['id'];
    	}else{
    		$furl="javascript:void(0);";
    	}
    	//下一页
    	$after=$article->where("id>".$arid)->order('id asc')->limit('1')->find();
    	if($after){
    		$aurl=__CONTROLLER__.'/index/arid/'.$after['id'];
    	}else{
    		$aurl="javascript:void(0);";
    	}
    	$this->assign('aurl',$aurl);
    	$this->assign('furl',$furl);
        $this->display();
    }
}
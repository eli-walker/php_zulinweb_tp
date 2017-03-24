<?php
namespace Home\Controller;
use Think\Controller;
class PageController extends CommonController {
    public function index(){
    	$cateid=I('cateid');
    	$cate=D('cate');
    	$cates=$cate->find($cateid);
    	$this->assign('cates',$cates);
        $this->display();
    }
}
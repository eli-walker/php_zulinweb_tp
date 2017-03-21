<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

class IndexController extends CommonController{
    public function index(){
  
    $this->articles_all();   
	$this->display();
    }
    
    
    public function articles_all(){     //获取全部的文章，用于首页
              
        $article=D('article');
        
        $count      = $article->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        $articles=$article->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        
        
        $this->assign('articles_all',$articles);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
    }
}
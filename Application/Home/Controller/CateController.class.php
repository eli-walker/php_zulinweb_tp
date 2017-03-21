<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

class CateController extends CommonController {
    public function index(){
	
    $this->current(); 
    $this->articles_cate();    
	$this->display();
	
    } 
    
    
    public function current(){  //获取当前选择的栏目
	 $cateid=I('id');
	 $this->assign('current',$cateid);
    }
    
    
    public function articles_cate(){     //获取所选栏目的文章
    
        $article=D('article');

        $count      = $article->where(array('cateid'=>I('id'),))->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
        
        $articles=$article->where(array('cateid'=>I('id'),))->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
    
        $this->assign('articles_cate',$articles);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
    }
    
    
}
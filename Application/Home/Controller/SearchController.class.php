<?php
namespace Home\Controller;
use Think\Controller;
class SearchController extends CommonController {
    public function index()
    {
        $article=D('article');
        $where=1;
        if($kw=I('kws')){
            $where.=' AND title LIKE "%'.$kw.'%"';
        }
        if($search=I('cateid')){
            $where.=' AND cateid ='.$search;
        }
        $count=$article->where($where)->count();// 查询满足要求的总记录数
        $Page=new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show= $Page->show();// 分页显示输出
        $list = $article->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        if($search==69){
            $view='list';
        }elseif($search==68 || $search==70){
            $view='carlist';
        }elseif($search==80){
            $view='rylist';
        }
        $this->display($view);
    }
}
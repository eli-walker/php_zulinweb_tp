<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;

class LinkController extends CommonController {
    public function index(){
	//$this->show('Admin模块的index控制器的index方法','utf-8');
	
	$this->display();
    }
    
    public function lst(){
        $link=D('link');
        $count= $link->count();// 查询满足要求的总记录数
        $Page=new \Think\Page($count,8);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show=$Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $links=$link->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        
        $this->assign('links',$links);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

        $this->display();
    }
    
    public function add(){
       
        
        if(IS_POST){
          $link=D('link');
           
          if($link->create()){
             if ($link->add()){$this->success('添加链接成功！',U('add'));}
            }
          else{
             $this->error($link->getError());    
              }
            return;
            
        };
        
        $this->display();
    }
    
    public function edit(){
        $link=D('link');
        if (IS_POST){
        if($link->create()){
           if ($link->save()){$this->success('修改链接成功！',U('lst'));}//未修改内容 则不会成功
           else{ $this->redirect('lst');}//跳转回link
           }
          else{
             $this->error($link->getError());    
              }
              return;
        }
        
        $links=$link->find(I('id'));
        $this->assign('links',$links);
        
        $this->display();
    }
    
    public function del(){
        $link=D('link');
     if($link->delete(I('id'))){
            $this->success('删除链接成功！',U('lst'));
         }
          else{
             $this->error('删除链接失败！');    
              }
    }
    
    public function sort(){
        $link=D('link');
        foreach ($_POST as $id=>$sort){
        $link->where(array('id'=>$id))->setField('sort',$sort);    
        }
        $this->success('更新排序成功！');
    }
    
}
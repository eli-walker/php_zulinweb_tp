<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;

class CateController extends CommonController {
    public function index(){
	//$this->show('Admin模块的index控制器的index方法','utf-8');
	
	$this->display();
    }
    
    public function lst(){
        $cate=D('cate');
        $cateres=$cate->order('sort asc')->select();
        $this->assign('cateres',$cateres);     
        $this->display();
    }
    
    public function add(){
       
        
        if(IS_POST){
          $cate=D('cate');
            //$date['catename']=I('catename');
          if($cate->create()){
             if ($cate->add()){$this->success('添加栏目成功！',U('lst'));}
            }
          else{
             $this->error($cate->getError());    
              }
            return;
            
        };
        
        $this->display();
    }
    
    public function edit(){
        $cate=D('cate');
        if (IS_POST){
        if($cate->create()){
           if ($cate->save()){$this->success('修改栏目成功！',U('lst'));}//未修改内容 则不会成功
           else{ $this->redirect('lst');}//跳转回lst
           }
          else{
             $this->error($cate->getError());    
              }
              return;
        }
        
        $cates=$cate->find(I('id'));
        $this->assign('cates',$cates);
        
        $this->display();
    }
    
    public function del(){
        $cate=D('cate');
     if($cate->delete(I('id'))){
            $this->success('删除栏目成功！',U('lst'));
         }
          else{
             $this->error('删除栏目失败！');    
              }
    }
    
    public function sort(){
        $cate=D('cate');
        foreach ($_POST as $id=>$sort){
        $cate->where(array('id'=>$id))->setField('sort',$sort);    
        }
        $this->success('更新排序成功！');
    }
    
}
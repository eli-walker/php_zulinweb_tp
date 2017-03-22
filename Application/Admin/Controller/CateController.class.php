<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;

class CateController extends CommonController {
    public function index(){

	
	$this->display();
    }
    
    public function lst(){
        $cate=D('cate');
        
        /*$count= $cate->count();// 查询满足要求的总记录数
        $Page=new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show=$Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $cates=$catestree->order('sort asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('cateres',$cates);   
        $this->assign('page',$show);// 赋值分页输出*/

        $catestree=$cate->catetree();
        $this->assign('cateres',$catestree);
        $this->display();
        
    }
    
    public function add(){
       
        if(IS_POST){
        
            if ($_FILES['pic']['tmp_name']!=''){   //接收上传的文章缩略图片
        
                $config = array(
                    'maxSize'=>3145728,
                    'rootPath'=>PIC_ROOTPATH,
                    'savePath'=>PIC_SAVEPATH,
                    'saveName'=>array('uniqid',''),
                    'exts'=>array('jpg', 'gif', 'png', 'jpeg'),
                );
        
                $upload = new \Think\Upload($config);// 实例化上传类  **只有实例化的时候直接传入$config参数才能写入rootPath**
                $info   =   $upload->upload(); // 上传文件
        
                if(!$info) {                                // 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{
                    $this->success('上传成功！',U('lst'));// 上传成功
                    unlink(PIC_ROOTPATH.$_POST['pic']);   //删除原来存储的图片****图片路径要加上根路径'.'才能删除,即'./Public**'
                    $_POST['pic']=$info['pic']['savepath'].$info['pic']['savename'];  //将接收的图片路径保存至$_POST中，以方便直接create()
        
                }
            }
        
      
          $cate=D('cate');
            //$date['catename']=I('catename');
          if($cate->create()){
             if ($cate->add()){$this->success('添加栏目成功！',U('lst'));}
             else {  unlink(PIC_ROOTPATH.$_POST['pic']); }  //添加失败则删除上传的图片
            }
          else{
              unlink(PIC_ROOTPATH.$_POST['pic']);
             $this->error($cate->getError());    
              }
            return;
            
        };
        
        $cate=D('cate');
       
        $cates=$cate->catetree();
        $this->assign('cates_all',$cates);// 赋值分页输出
        $this->display();
    }
    
    public function edit(){
        $cate=D('cate');
        if (IS_POST){
            
            if ($_FILES['pic']['tmp_name']!=''){   //接收上传的文章缩略图片
            
                $config = array(
                    'maxSize'=>3145728,
                    'rootPath'=>PIC_ROOTPATH,  //设置图片保存根目录，由入口文件的图片目录常量定义
                    'savePath'=>PIC_SAVEPATH,  //设置图片保存路径，由入口文件的图片目录常量定义
                    'saveName'=>array('uniqid',''),
                    'exts'=>array('jpg', 'gif', 'png', 'jpeg'),
                );
            
                $upload = new \Think\Upload($config);// 实例化上传类  **只有实例化的时候直接传入$config参数才能写入rootPath**
                $info   =   $upload->upload(); // 上传文件
            
                if(!$info) {                                // 上传错误提示错误信息
                    $this->error($upload->getError(),U('lst'));
                }else{
                    unlink($config['rootPath'].I('pic'));   //删除原来存储的图片****图片路径要加上根路径'.'才能删除,即'./Public**'
                    $_POST['pic']=$info['pic']['savepath'].$info['pic']['savename'];  //将接收的图片路径保存至$_POST中，以方便直接create()
                    $this->success('上传成功！',U('lst'));// 上传成功
                }
            }
            
        if($cate->create()){
           if ($cate->save()){$this->success('修改栏目成功！',U('lst'));}//未修改内容 则不会成功
           else{ $this->redirect('lst');}//跳转回lst
           }
          else{
             $this->error($cate->getError());    
              }
              return;
        }
        $cates_all=$cate->order('sort asc')->select();
        $cates=$cate->find(I('id'));
        $this->assign('cates_all',$cates_all);
        $this->assign('cates',$cates);
        
        $this->display();
    }
    
    public function del(){
        $cate=D('cate');
        $cates=$cate->find(I('id'));
     if($cate->delete($cates['id'])){
            unlink(PIC_ROOTPATH.$cates['pic']);   //删除原来存储的图片
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
        $this->success('更新排序成功！',U('lst'));
    }
    
}
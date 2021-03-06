<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;


class ArticleController extends CommonController {
    
    
    public function index(){
	//$this->show('Admin模块的index控制器的index方法','utf-8');
	
	$this->display();
    }
    
    public function lst(){
        $article=D('ArticleView');
        $count= $article->count();// 查询满足要求的总记录数
        $Page=new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show=$Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $articles=$article->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
        
        $this->assign('articles',$articles);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出

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

          
            
            $_POST['time']=time();
             
             $article=D('article');
           
              if($article->create()){
                  if ($article->add()){$this->success('添加文章成功！',U('lst'));}
                     else {  unlink(PIC_ROOTPATH.$_POST['pic']); }  //添加失败则删除上传的图片
                }
                else{ 
                    unlink(PIC_ROOTPATH.$_POST['pic']);
                    $this->error($article->getError()); 
                   }
          
            return;
            
        };
        
        $cates=D('cate')->catetree();
        $this->assign('cates',$cates);
        
        $this->display(); 
        
    }
    
    public function edit(){
        $article=D('article');
        
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
            
          
            
        if($article->create()){
           if ($article->save())
           { 
               $this->success('修改文章成功！',U('lst'));//未修改内容 则不会成功
            } 
               else{ 
                 $this->error($article->getError(),U('lst'));} //返回错误并跳转
                   }
        else{ $this->error($article->getError(),U('lst')); }
            
                         
            return ;
        }
     else {
         
        $articles=$article->find(I('id'));
        $this->assign('articles',$articles);
        
        $cates=D('cate')->select();
        $this->assign('cates',$cates);
        
        $this->display();
         }
         
    }
    
    public function del(){
        $article=D('article');
        $articles=$article->find(I('id'));
        
     if($article->delete($articles['id'])){
            unlink(PIC_ROOTPATH.$articles['pic']);   //删除原来存储的图片
            $this->success('删除文章成功！',U('lst'));
         }
          else{
             $this->error('删除文章失败！');    
              }
    }
    
   
    
}
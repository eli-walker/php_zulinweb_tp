<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;

class SpecialController extends CommonController {
    public function index(){
	$this->special();
 	$this->display();
    }
    
    
    public function special(){     //获取预留名下的信息
    
        if (IS_POST){
            
            $special=D('Special');
            
              $map['name'] = array('eq', I('name'));   //设置查询条件 //阅读次数大于0才显示 ****部署模式下这条无效？？？
              $map['read_times'] =array('gt',0);    
              $special_one=$special->where($map)->find();
            
            //*************************************************************************
            /*曾经的add、save无法正常工作问题，而且在调试模式下一切正常，关闭调试模式又不能用。由于已经不止一次出现
             * 功夫不负有心人，许久后否定了自己的代码错误可能，清空了除Runtime/Data/_fields/的所有缓存文件，
             * 无果。最后，将Runtime/Data/_fields/下面的字段缓存文件删除后，系统恢复正常，save和add运行OK。*/
            //********************************************************************
            if ($special_one){
          //***信息的阅读次数减1*//不能用'reads'或'read'作为字段，否则setDec无效，关键字冲突
               $special->where($map)->setDec('read_times',1);//阅读次数减1
               $this->assign('special_one',$special_one);// 传递当前信息*/
            
               }else{ $this->redirect('/Home/Index');}
            
          }else{$this->redirect('/Home/Index');}
          
    }
    
    
    
    
}
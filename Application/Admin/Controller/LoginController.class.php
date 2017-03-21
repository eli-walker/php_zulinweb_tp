<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
    public function index(){
	//$this->show('Admin模块的index控制器的index方法','utf-8');
	
  
         if(IS_POST)
         {
             $admins=D('admin');
             
            if($admins->create($_POST,4)){
                 
              if($admins->login()){
                     $this->success('登陆成功！',U('Index/index'));
                     return ;
                 
                  }else{$this->error('用户名或密码错误！',U('Login/index')); } 
                 
             }else{$this->error($admins->getError(),U('Login/index')); }
             
         }
     
         if (session('id'))
         {
            $this->error('已经登录系统，请勿重复登录',U('Index/index'));  
         }else  { $this->display('login');}
    	  
	  
    }
    
    public function verify()         //验证码生成函数
    {   
        $config =    array(          
            'fontSize'    =>    30,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        
        ob_clean();
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }
    
       
}
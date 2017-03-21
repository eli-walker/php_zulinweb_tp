<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    
    public function __construct()      //构造方法
    {
        parent::__construct(); //执行父类的构造方法
        if (!session('id'))                   //验证用户已登录，否则跳转到登录界面
        { $this->error('请先登录系统！',U('Login/index')); }
    }
    
  
    
 }
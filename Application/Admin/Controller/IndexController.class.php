<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;

class IndexController extends CommonController {
    public function index(){
	//$this->show('Admin模块的index控制器的index方法','utf-8');
	
    $this->assign('PHP_VERSION',PHP_VERSION);    //获取PHP的版本号
        
	$this->display();
    }
}
<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;

class AdminController extends CommonController {
    public function index(){
	//$this->show('Admin模块的index控制器的index方法','utf-8');
	
	$this->display();
    }
    
    public function lst(){
        $admin=D('admin');
        $where=1;
        if($kw=I('kw')){
            $where.=' AND username LIKE "%'.$kw.'%"';
        }
        
        $list = $admin->field('a.id,a.username,b.rolename')->alias('a')->join('LEFT JOIN cs_role b ON a.roleid=b.id')->where($where)->select();
        $this->assign('admins',$list);// 赋值数据集


        $this->display();
    }
    
    public function add(){
       
        
        if(IS_POST){
          $admins=D('admin');
          
         // $_POST['password']=md5($_POST['password']);//密码信息加密
          
          if($admins->create()){
             if ($admins->add()){$this->success('添加管理员成功！',U('lst'));}
            }
          else{
                $this->error($admins->getError(),U('lst'));    
              }
            return;
            
        };
        $role=D('role');
        $roles=$role->select();
        $this->assign('roles',$roles);
        $this->display();
    }
    
    public function edit(){
        $admins=D('admin');
        if (IS_POST){
        if($admins->create()){
           if ($admins->save()){$this->success('修改管理员成功！',U('lst'));}//未修改内容 则不会成功
             else{ $this->error($admins->getError(),U('lst')); }
           }
          else{  $this->error($admins->getError(),U('lst')); }
              return;
        }
        
        $role=D('role');
        $roles=$role->select();
        $this->assign('roles',$roles);
        $admins=$admins->find(I('id'));
        $this->assign('admins',$admins);
        
        $this->display();
    }
    
    public function del(){
        $admins=D('admin');
       if (I('id')!=1) {    //防止删除默认的管理员用户 id=1
           if($admins->delete(I('id'))){
                $this->success('删除管理员成功！',U('lst'));
             }  else{ $this->error('删除管理员失败！',U('lst')); }
              
       }else{$this->error('不能删除默认管理员！',U('lst'));};
    }
    
    public function logout(){
        session(null); // 清空当前的session
        $this->success('退出成功，跳转中...',U('Login/index'));
    }
    
    
}
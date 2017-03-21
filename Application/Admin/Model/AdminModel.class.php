<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model {
    
    protected $_validate=array(
        
    array('username','require','管理员名称不能为空！',1,'regex',3), //验证不能为空  
    array('password','require','密码不能为空！',1,'regex',3), //验证不能为空
    
    array('username','','管理员名称不能重复！',0,'unique',1), //验证不能重复  新增操作[1]
    array('username','','管理员名称不能重复！',0,'unique',2), //验证不能重复    编辑操作[2]   
            //验证规则中最后一个参数的"验证时间"设置为3即全部验证，也包含自定义的验证时间 ，意思是在登录操作中设置的验证时间为4时也会执行验证。  
           //   $admins->create($_POST,4); 设置验证时间为4，规则中的全部验证[3]（包含自定义的验证时间）
   
    array('verify','check_verify','验证码错误！',1,'callback',4), //验证-验证码    登录操作[4]  
  
        
    );
   
    
    public function login()
    {
       
        // 构造查询条件
           $condition['username'] = $this->username;
           $condition['password'] = $this->password;
           
        /*  $condition['username'] = array('eq', $this->username);
            $condition['password'] =array('eq',$this->password);  //指令等效，也一样   */
          
       // 构造查询数据
         $info=$this->where($condition)->find();
         $info=$this->where($condition)->find();  //这里部署模式下，重复执行2次才能正常查询到
        
         //***************************************************
         /*thinkphp在部署模式时，使用数组作为查询条件的数据指令有时候查询不到数据，
          * 如果重复执行两次就会正常。
          * 部署模式下，使用字符串作为查询条件的数据指令没有异常，执行一次就可以。
          * 调试模式下指令执行一次也没有出现异常，包括数组以及字符串的条件. 
          * 并不是指令简略或者在模型里调用的问题  
         //*****************************************************/
       
 
        if ($info)
        {   
                session('id',$info['id']);
                session('username',$info['username']);
                return true;
                
         }else  { return false; }
        
        
        
    }
    
    
      function check_verify($code, $id = '')   //验证码检测函数
    {
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
        
    }  
    
   
}
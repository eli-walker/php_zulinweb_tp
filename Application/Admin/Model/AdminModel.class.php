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
  
    public function getpri($roleid){
        $role=D('role');
        $pri=D('privilege');
        $role->field('rolename,pri_id_list')->find($roleid);
        session('rolename',$role->rolename);
        if($role->pri_id_list=='*'){
            session('privilege','*');
            $menu=$pri->where("parentid=0")->select();
            foreach ($menu as $k => $v) {
                $menu[$k]['sub']=$pri->where('parentid='.$v['id'])->select();
            }
    
            session('menu',$menu);
    
        }else{
            //Admin/Admin/add,Admin/Article/add
            	
            $pris=$pri->field('id,parentid,pri_name,mname,cname,aname,CONCAT(mname,"/",cname,"/",aname) url')->where("id IN({$role->pri_id_list})")->select();
            $_pris=array();
            $menu=array();
            foreach($pris as $k=>$v){
                $_pris[]=$v['url'];
                if($v['parentid']==0){
                    $menu[]=$v;
                }
            }
            session('privilege',$_pris);
            foreach ($menu as $k => $v) {
                foreach ($pris as $k1 => $v1) {
                    if($v1['parentid']==$v['id']){
                        $menu[$k]['sub'][]=$v1;
                    }
                    	
                }
            }
    
            session('menu',$menu);
        }
    
    }
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
<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Model;
use Think\Model;

class CateModel extends Model {
    
    protected $_validate=array(
        
    array('catename','require','栏目名称不能为空！',1,'regex',3), //验证不能为空   
    array('catename','','栏目名称不能重复！',0,'unique',3), //验证不能重复      
    );
   
    
    public function catetree(){
       $data=$this->select();
       return $this->resort($data);
    }
    
    public function resort($data,$parentid=0,$level=0){     //递归函数 添加栏目level排序
        static $ret=array();
        foreach ($data as $k=>$v)
        {
            if($v['parentid']==$parentid)
            {
                $v['level']=$level;
                $ret[]=$v;
                $this->resort($data,$v['id'],$level+1);
            }
        }
       return $ret;
    }
    
    public function _before_delete($options){
      //单独删除时 id的值是一个字符 ，一个单独的id
      $id=$options['where']['id'];
      
    }
    
    
    
}
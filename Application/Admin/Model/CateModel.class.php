<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Model;
use Think\Model;

class CateModel extends Model {
    
    protected $_validate=array(
        
    array('catename','require','栏目名称不能为空！',1,'regex',3), //验证不能为空   
    array('catename','','栏目名称不能重复！',0,'unique',3), //验证不能重复      
    );
   
    
    
}
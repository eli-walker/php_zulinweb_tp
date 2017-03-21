<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Model;
use Think\Model;

class LinkModel extends Model {
    
    protected $_validate=array(

    array('title','require','链接名称不能为空！',1,'regex',3), //验证不能为空
    array('url','require','链接地址不能为空！',1,'regex',3), //验证不能为空   
    array('title','','链接名称不能重复！',0,'unique',3), //验证不能重复      
    );
   
    
    
}
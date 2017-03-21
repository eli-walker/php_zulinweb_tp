<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Model;
use Think\Model;

class SpecialModel extends Model {
    
    protected $_validate=array(

    array('title','require','信息标题不能为空！',1,'regex',3), //验证不能为空
   // array('content','require','信息内容不能为空！',1,'regex',3), //验证不能为空 
    array('read_times','require','阅读次数不能为空！',1,'regex',3), //验证不能为空
    array('name','require','预留名称不能为空！',1,'regex',3), //验证不能为空
    array('name','','预留名称不能重复！',0,'unique',3), //验证不能重复      
    );
   
    
    
}
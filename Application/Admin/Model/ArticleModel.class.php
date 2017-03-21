<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Model;
use Think\Model;

class ArticleModel extends Model {
    
    protected $_validate=array(

    array('title','require','文章标题不能为空！',1,'regex',3), //验证不能为空
    array('content','require','文章内容不能为空！',1,'regex',3), //验证不能为空 
    array('cateid','require','所属栏目不能为空！',1,'regex',3), //验证不能为空
    array('title','','文章标题不能重复！',0,'unique',3), //验证不能重复      
    );
   
    
    
}
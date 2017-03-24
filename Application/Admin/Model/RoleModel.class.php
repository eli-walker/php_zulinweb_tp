<?php
namespace Admin\Model;
use Think\Model;
class RoleModel extends Model
{
	protected $_validate = array(
		array('rolename','require','角色名称不得为空！',1),  // 都有时间都验证
		array('rolename','','角色名称不得重复！',1,unique), 
		);

	




























}
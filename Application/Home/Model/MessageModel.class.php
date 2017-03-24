<?php
namespace Home\Model;
use Think\Model;
class MessageModel extends Model
{
	protected $_validate = array(
		array('nickname','require','姓名不能为空！',1),  // 都有时间都验证
		array('telephone','require','电话不能为空！',1),
		array('email','require','邮箱不能为空！',1), 
		array('content','require','内容不能为空！',1),
		array('verify','verify','验证码错误！',1,'callback',1),
		);
	

	public function verify($code){
		$verify = new \Think\Verify();
		return $verify->check($code, '');

	}



	




























}
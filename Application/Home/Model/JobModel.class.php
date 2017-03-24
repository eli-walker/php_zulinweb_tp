<?php
namespace Home\Model;
use Think\Model;
class JobModel extends Model
{
	protected $_validate = array(
		array('title','require','求职职位不能为空！',1),  // 都有时间都验证
		array('name','require','姓名不能为空！',1), 
		array('mobile','require','手机不能为空！',1),
		array('verify','verify','验证码错误！',1,'callback',1),
		);
	

	public function verify($code){
		$verify = new \Think\Verify();
		return $verify->check($code, '');

	}



	




























}
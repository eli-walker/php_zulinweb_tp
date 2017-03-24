<?php
namespace Admin\Model;
use Think\Model;
class PrivilegeModel extends Model
{
	protected $_validate = array(
		array('pri_name','require','权限名称不得为空！',1),  // 都有时间都验证
		array('mname','require','模块名称不得为空！',1), 
		array('cname','require','控制器名称不得为空！',1), 
		array('aname','require','方法名称不得为空！',1), 
		array('pri_name','','权限名称不得重复！',1,unique), 
		);

	
	public function pritree()
	{
		$data=$this->select();
		return $this->resort($data);
	}

	public function resort($data,$parentid=0,$level=0)
	{
		static $ret=array();
		foreach ($data as $k => $v) 
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

	//以下是删除相关的方法
	public function childid($priid)
	{
		$data=$this->select();
		return $this->getchildid($data,$priid);
	}

	public function getchildid($data,$parentid)
	{
		static $ret=array();
		foreach ($data as $k=>$v) {
			if($v['parentid']==$parentid)
			{
				$ret[]=$v['id'];
				$this->getchildid($data,$v['id']);
			}
		}

		return $ret;
	}


	public function _before_delete($options)
	{
		//单独删除时候id的值，是一个字符串，是一个单独的id
		//$options['where']['id']    int(5)
		if(is_array($options['where']['id']))
		{
			$arr=explode(',', $options['where']['id'][1]);
			$soncates=array();
			foreach ($arr as $k=>$v)
			{
				$soncates2=$this->childid($v);
				$soncates=array_merge($soncates,$soncates2);
			}
			$soncates=array_unique($soncates);
			$chilrenids=implode(',', $soncates);

		}else
		{
			$chilrenids=$this->childid($options['where']['id']);
			$chilrenids=implode(',', $chilrenids);
			
		}

		if($chilrenids)
			{
				$this->execute("delete from cs_privilege where id in($chilrenids)");
			}
	}



























}
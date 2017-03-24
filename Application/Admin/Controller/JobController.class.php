<?php
namespace Admin\Controller;

class JobController extends CommonController 
{
    public function lst(){
       	$job=D('job');
       	$count=$job->count();// 查询满足要求的总记录数
        $Page=new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show= $Page->show();// 分页显示输出
        $list = $job->field('id,title,name,sex,bplace,education')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
       	$this->assign('jobres',$jobres);
        $this->display();
    }

    public function detail(){
    	$job=D('job');
    	$id=I('id');
    	$jobs=$job->find($id);
    	$this->assign('jobs',$jobs);
    	$this->display();

    }

    public function del()
    {
        $job=D('job');
        $id=I('id');
        if($job->delete($id))
        {
            $this->success('成功删除求职信息！',U('lst'));
        }else
        {
            $this->error('删除求职信息失败！');
        }
    }

    public function bdel()
    {
        $job=D('job');
        $ids=I('ids');
        $ids=implode(',', $ids);  //1,2,3,4
        if($ids)
        {
            if($job->delete($ids))
            {
                $this->success('批量删除求职信息成功！',U('lst'));
            }else
            {
                $this->error('批量删除求职信息失败！');
            }
        }else
        {
            $this->error('未选中任何内容！');
        }
    }

   












}
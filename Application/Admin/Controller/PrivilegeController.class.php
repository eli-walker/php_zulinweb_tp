<?php
namespace Admin\Controller;
use Think\Controller;
class PrivilegeController extends CommonController 
{
    public function lst()
    {
        $pri=D('privilege');
        $pris=$pri->pritree();
        $this->assign('pris',$pris);
        $this->display();
    }

    public function add()
    {
        $pri=D('privilege');
        if(IS_POST){
            if($pri->create()){
                if($pri->add()){
                    $this->success('添加权限成功！',U('lst'));
                }else{
                    $this->error('添加权限失败！');
                }
            }else{
                $this->error($pri->getError());
            }

            return;
        }

        $pris=$pri->pritree();
        $this->assign('pris',$pris);
        $this->display();
    }

    public function edit()
    {
        $pri=D('privilege');
        if(IS_POST){
            if($pri->create()){
                if($pri->save()){
                    $this->success('修改权限成功！',U('lst'));
                }else{
                    $this->error('修改权限失败！');
                }
            }else{
                $this->error($pri->getError());
            }

            return;
        }
        $id=I('id');
        $prires=$pri->find($id);
        $this->assign('prires',$prires);
        $pris=$pri->pritree();
        $this->assign('pris',$pris);
        $this->display();
    }


    public function del()
    {
        $pri=D('privilege');
        $id=I('id');
        if($pri->delete($id))
        {
            $this->success('成功删除权限！',U('lst'));
        }else
        {
            $this->error('删除权限失败！');
        }
    }

    public function bdel()
    {
        $pri=D('privilege');
        $ids=I('ids');
        $ids=implode(',', $ids);  //1,2,3,4
        if($ids)
        {
            if($pri->delete($ids))
            {
                $this->success('批量删除权限成功！',U('lst'));
            }else
            {
                $this->error('批量删除权限失败！');
            }
        }else
        {
            $this->error('未选中任何内容！');
        }
    }
   













}
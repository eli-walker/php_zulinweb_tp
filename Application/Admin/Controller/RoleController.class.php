<?php
namespace Admin\Controller;
use Think\Controller;
class RoleController extends CommonController 
{
    public function lst(){
        $role=D('role');
        $count=$role->count();// 查询满足要求的总记录数
        $Page=new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show=$Page->show();// 分页显示输出
        $list =$role->field('a.*,GROUP_CONCAT(b.pri_name) pri_name')->alias('a')->join('LEFT JOIN cs_privilege b ON FIND_IN_SET(b.id,a.pri_id_list)')->limit($Page->firstRow.','.$Page->listRows)->group('a.id')->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function add(){
        $role=D('role');
        if(IS_POST){
            if($role->create()){
                $role->pri_id_list=implode(',', $role->pri_id_list);
                if($role->add()){
                    $this->success('添加角色成功！',U('lst'));
                }else{
                    $this->error('添加角色失败！');
                }
            }else{
                $this->error($role->getError());
            }

            return;
        }
        $pri=D('privilege');
        $pris=$pri->pritree();
        $this->assign('pris',$pris);
        $this->display();
    }

    public function edit(){
        $role=D('role');
        if(IS_POST){
            if($role->create()){
                $role->pri_id_list=implode(',', $role->pri_id_list);
                if($role->save()){
                    $this->success('修改角色成功！',U('lst'));
                }else{
                    $this->error('修改角色失败！');
                }
            }else{
                $this->error($role->getError());
            }

            return;
        }
        
        $id=I('id');
        $roleres=$role->find($id);
        $pri=D('privilege');
        $pris=$pri->pritree();
        $this->assign('pris',$pris);
        $this->assign('roleres',$roleres);
        $this->display();
    }

    public function del(){
        $id=I('id');
        $role=D('role');
        if($id==1){
            $this->error('超级管理员角色无法删除！');
        }
        if($role->delete($id)){
            $this->success('删除角色成功！',U('lst'));
        }else{
            $this->error('删除角色失败！');
        }
    }
   
   public function bdel(){
    $ids=I('ids');
    if($ids){
        $key=array_search(1, $ids);
        if($key!==fales){
            unset($ids[$key]);
        }
    $role=D('role');
    $ids=implode(',', $ids);
    if($role->delete($ids)){
        $this->success('批量删除角色成功！',U('lst'));
    }else{
        $this->error('批量删除角色失败！');
    }
   } 
    }
    











}
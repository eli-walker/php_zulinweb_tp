<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends CommonController 
{
    public function lst(){
        $message=D('message');
        $count=$message->count();// 查询满足要求的总记录数
        $Page=new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show= $Page->show();// 分页显示输出
        $list = $message->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->assign('messageres',$messageres);
        $this->display();
    }

    public function add(){
        $message=D('message');
        if(IS_POST){
            if($message->create()){
                if($message->add()){
                    $this->success('添加留言成功！',U('lst'));
                }else{
                    $this->error('添加留言失败！');
                }
            }else{
                $this->error($message->getError());
            }


            return;
        }
        $this->display();
    }

    public function checked(){
        $message=D('message');
        if(IS_POST){
            if($message->create()){
                if($message->save()){
                    $this->success('审核通过',U('lst'));
                }else{
                    $this->error('审核不予通过！');
                }

            }else{
                $this->error($message->getError());
            }

            return;
        }
        $id=I('id');
        $messages=$message->find($id);
        $this->assign('messages',$messages);
        $this->display();
    }

    public function reply($id){
        $message=D('message');
        $reply=D('reply');
        if(IS_POST){
            $data['mid']=I('mid');
            $data['content']=I('content');
            $data['time']=time();
            if($reply->create($data)){
                if($reply->add()){
                    $this->success('修改留言成功！',U('lst'));
                }else{
                    $this->error('修改留言失败！');
                }
            }else{
                $this->error($reply->getError());
            }


            return;
        }
        $replyres=$reply->where("mid=$id")->select();
        $messages=$message->find($id);
        $this->assign('messages',$messages);
        $this->assign('replyres',$replyres);
        $this->display();
    }

    public function del()
    {
        $message=D('message');
        $reply=D('reply');
        $id=I('id');
        if($message->delete($id))
        {
            //删除对应留言的所有回复
            $reply->where("mid=$id")->delete();
            $this->success('成功删除留言！',U('lst'));
        }else
        {
            $this->error('删除留言失败！');
        }
    }

    public function bdel()
    {
        $message=D('message');
        $reply=D('reply');
        $ids=I('ids');
        $ides=$ids;
        $ids=implode(',', $ids);  //1,2,3,4
        if($ids)
        {
            if($message->delete($ids))
            {
                foreach ($ides as $k=> $v) {
                    $reply->where("mid=$v")->delete();
                }
                $this->success('批量删除留言成功！',U('lst'));
            }else
            {
                $this->error('批量删除留言失败！');
            }
        }else
        {
            $this->error('未选中任何内容！');
        }
    }

    public function sortmessage()
    {
        $message=D('message');
        foreach ($_POST as $id=>$sort) {
            $message->where("id=$id")->setField('sort',$sort);
        }

        $this->success('成功更新留言顺序！',U('lst'));
    }












}
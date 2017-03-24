<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct(){
    	parent::__construct();
    	$cateid=I('cateid');
    	$arid=I('arid');
    	if($arid){
    		$article=D('article');
    		$articles=$article->find($arid);
    		$cateid=$articles['cateid'];
    	}
        if($cateid){$this->selftop($cateid);}
        if($cateid){
            $pres=$this->getparent($cateid);
            $this->assign('pres',$pres);
        }
        
        
        $this->assign('pres',$pres);
    	$this->getcate($cateid);
    	$this->nav();  
        $this->link(); 
    }

    public function link(){
        $link=D('link');
        $linkres=$link->field('title,url')->select();
        $this->assign('linkres',$linkres);
    }


    public function getparent($cateid){
        $res=array();
        $cate=D('cate');
        while ($cateid) {
            $cates=$cate->find($cateid);
            $res[]=array(
                'id'=>$cates['id'],
                'catename'=>$cates['catename'],
                'type'=>$cates['type']
                );
            $cateid=$cates['parentid'];
        }

        return array_reverse($res);
   }

    public function selftop($cateid){
        $cate=D('cate');
        $cates=$cate->find($cateid);
        if($cates['class']==1){
            $selftop=$cates['catename'];
        }elseif($cates['class']==2){
            $cates=$cate->where('id='.$cates['parentid'])->find();
            $selftop=$cates['catename'];
        }else{
            $cates=$cate->where('id='.$cates['parentid'])->find();
            $cates=$cate->where('id='.$cates['parentid'])->find();
            $selftop=$cates['catename'];
        }

        $this->assign('selftop',$selftop);
    }

    public function getcate($cateid){

    	if($cateid){
    		$cate=D('cate');
    		$cates=$cate->find($cateid);
    		$catesons=$cate->where('parentid='.$cates['id'])->select();
    		if($cates['parentid']==0 && !$catesons){
    			$cates=$cate->where("id=68")->find();
    			$this->assign('contro',true);
    		}
    		$this->assign('catesons',$catesons);

    		if($cates['class']==1){
    			$son2=$cate->where('parentid='.$cates['id'])->select();
    			$this->assign('son2',$son2);
    			$this->assign('son3',null);
    			$this->assign('topname',$cates['catename']);

    		}

    		if($cates['class']==2){
    			$topcates=$cate->where('id='.$cates['parentid'])->find();
    			$son2=$cate->where('parentid='.$topcates['id'])->select();
    			$son3=$cate->where('parentid='.$cates['id'])->select();
    			$this->assign('son2',$son2);
    			$this->assign('son3',$son3);
    			$this->assign('topname',$topcates['catename']);
    		}


    		if($cates['class']==3){
    			$upercates=$cate->where('id='.$cates['parentid'])->find();//三级栏目对应的二级栏目
    			$topcates=$cate->where('id='.$upercates['parentid'])->find();
    			$son3=$cate->where('parentid='.$upercates['id'])->select();
    			$son2=$cate->where('parentid='.$topcates['id'])->select();
    			$this->assign('son2',$son2);
    			$this->assign('son3',$son3);
    			$this->assign('topname',$topcates['catename']);
    			$this->assign('son3pid',$upercates['id']);

    		}



    	}



    }

    public function nav(){
    	$cate=D('cate');
    	$where=array('parentid'=>0,'pc'=>1);
    	$navres=$cate->field('id,catename,type')->order('sort asc')->where($where)->select();
    	$this->assign('navres',$navres);
    }






}
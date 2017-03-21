<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Model;
use Think\Model\ViewModel;

class ArticleViewModel extends ViewModel {
    
    
    public $viewFields = array(
        'Article'=>array('id','title','pic','cateid','content','time','_type'=>'LEFT'),
        'Cate'=>array('catename', '_on'=>'Article.cateid=Cate.id'),
        
    );
    
  
    
    }
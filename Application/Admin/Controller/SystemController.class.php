<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;

class SystemController extends CommonController {
public function lst(){
        if(IS_POST){
            $file='./Application/Common/Conf/config.php';
            $config=array_merge(include $file,array_change_key_case($_POST,CASE_UPPER));
            $str="<?php\r\nreturn ".var_export($config,true)."; ?>";
            if(file_put_contents($file, $str)){
                $this->success('设置成功',U('Index/index'));
            }else{
                $this->error('设置失败');
            }
            

            return;
        }
        $this->display();
    }
    
   
}
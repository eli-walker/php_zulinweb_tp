<?php
return array(
	//'配置项'=>'配置值'
	
     // 更改默认的/Public 替换到当前模块的文件路径内
      'TMPL_PARSE_STRING' =>array(
      '__PUBLIC__' =>__ROOT__.'/'.APP_NAME.'/'.MODULE_NAME.'/Public', 
       ),

);
<?php
$params = "value2226668qafaf888"; #传递给python脚本的入口参数 
$path="py test_php.py "; //需要注意的是：末尾要加一个空格
$aaa=exec($path.$params);//等同于命令`python python.py 参数`，并接收打印出来的信息
echo $aaa;
?>

<?php

namespace App\Http\Controllers;

use App\Models\Collection;

class testpy extends Controller
{

    public function testA(){

        $path="python pytest/test_php.py "; //需要注意的是：末尾要加一个空格
        $aaa=exec($path);//等同于命令`python python.py 参数`，并接收打印出来的信息
        echo $aaa;
        
    }
}
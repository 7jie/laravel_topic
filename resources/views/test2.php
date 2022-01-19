<?php
     //require_once ("./lib/Smarty.class.php");
    if (file_exists("./lib/Smarty.class.php")){
        echo "hi";
    }else{
        echo "no";
    }
    echo "why";
    /*
     $smarty = new Smarty();
     $smarty->assign("title", "測試用的網頁標題");
     $smarty->assign("content", "測試用的網頁內容");
     $smarty->display('tmplates/index.html');
     */
 ?>

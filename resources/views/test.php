<?php
     require_once ("Smarty.class.php");
     $smarty = new Smarty();
     $smarty->assign("title", "測試用的網頁標題");
     $smarty->assign("content", "測試用的網頁內容");
     $smarty->display('index.html');
 ?>

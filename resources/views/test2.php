<?php
     require_once (dirname(__FILE__)."/smartyheader.php");
     $smarty = new Smarty();
     $smarty->template_dir = dirname(__FILE__).'/templates';
     $smarty->compile_dir = dirname(__FILE__).'/templates_c';
     $smarty->assign("title", "測試用的網頁標題");
     $smarty->assign("content", "測試用的網頁內容");
     $smarty->display('index.html');

 ?>

<?php
     require_once(dirname(__FILE__).'/lib/Smarty.class.php');
     $smarty = new Smarty();
     /*
     $smarty->setTemplateDir(dirname(__FILE__).'/templates');
     $smarty->setCompileDir(dirname(__FILE__).'/templates_c');
     */
     $smarty->assign("title", "測試用的網頁標題");
     $smarty->assign("content", "測試用的網頁內容");
     $smarty->display(dirname(__FILE__).'index.html');
 ?>

<?php
     require_once(dirname(__FILE__).'/lib/Smarty.class.php');
     $smarty = new Smarty();
     $smarty->assign("title", "測試用的網頁標題");
     $smarty->display(dirname(__FILE__).'/tmplates/index.html');
 ?>

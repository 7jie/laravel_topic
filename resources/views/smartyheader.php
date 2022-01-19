<?php

require_once(dirname(__FILE__). '/lib/Smarty.class.php');

$smarty = new Smarty();
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->setTemplateDir(dirname(__FILE__).'/templates');
$smarty-setCompileDir(dirname(__FILE__).'/templates_c');
?>
<?php

require_once(dirname(__FILE__). '/lib/Smarty.class.php');

$smarty = new Smarty();
$smarty->caching = true;
$smarty->cache_lifetime = 120;
$smarty->template_dir = dirname(__FILE__).'/templates';
$smarty->compile_dir = dirname(__FILE__).'/templates_c';
?>
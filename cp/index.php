<?php
require_once('../cfg.php');
require_once(CORE_PATH.'cfg_cms.php');
require_once(CORE_PATH.'cp/inc.php');
include(CORE_PATH.'cp/center.php');

ob_start();
echo $content;
ob_end_flush();
?>
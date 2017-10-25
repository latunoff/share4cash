<?php
require_once('cfg.php');
require_once(CORE_PATH.'cfg_cms.php');
require_once(CORE_PATH.'inc.php');
include(CORE_PATH.'center.php');

ob_start();
echo $content;
ob_end_flush();
?>
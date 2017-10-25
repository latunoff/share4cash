<?php
$core_path = str_replace('/cron.php','',__FILE__);
require_once($_SERVER['DOCUMENT_ROOT'].'/cfg.php');
require_once(CORE_PATH.'cfg_cms.php');
require_once(CORE_PATH.'inc.php');
    
$crons = Files::DirFiles(CORE_PATH.'cron/');
//ea($crons);
for($i=0,$ii=count($crons);$i<$ii;$i++) {
    include_once(CORE_PATH.'cron/'.$crons[$i]);
}
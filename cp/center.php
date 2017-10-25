<?php
$module = 'slinks';   //here can be some selection of modules
//$module = 'termin';
if(isset($_POST["js"]) || isset($_GET["js"])){
    define('JS',1);
    require_once($_SERVER['DOCUMENT_ROOT'].'/cfg.php');
    require_once(CORE_PATH.'cfg_cms.php');
    require_once(CORE_PATH.'inc.php');
}
define('MOD', $module);
define('MENU', getvar('menu', 'G', 'LAT', 20));
$id = getvar('id', 'G', 'INT', 20);
$item = getvar('item', 'G', 'INT', 20);
define('ID', $id);
define('ITEM', $item);
define('ACT', getvar('act', 'G', 'LAT', 20) );
global $OUT;

if(!defined('URL_PATH'))define('URL_PATH','');

$_CONF['js'] = array(/*TPL_PATH.'js/jquery.js', */TPL_PATH.'js/script.js');
$_CONF['styles'] = array(TPL_PATH.'css/style.css');

if( $module == 'termin' ){
    $_CONF['styles'][] = '/modules/datepicker/css/layout.css';
    $_CONF['styles'][] = '/modules/datepicker/css/datepicker.css';
    $_CONF['js'][] = '/modules/datepicker/js/datepicker.js';
    $_CONF['js'][] = '/modules/datepicker/js/eye.js';
    $_CONF['js'][] = '/modules/datepicker/js/utils.js';
    $_CONF['js'][] = '/modules/datepicker/js/layout.js'; 
}

$tpl = new Tpl();

$content = $OUT['site']['notification'] = '';

require_once(CORE_PATH.'cp/modules/'.MOD.'/'.MOD.'.php');

$_CONF['styles'] = '<link href="'.URL_PATH.implode('" rel="stylesheet" type="text/css" />'."\r\n".'<link href="'.URL_PATH, $_CONF['styles']).'" rel="stylesheet" type="text/css" />'."\r\n";
$_CONF['js'] = '<script src="'.URL_PATH.implode('"></script>'."\r\n".'<script src="'.URL_PATH, $_CONF['js']).'"></script>'."\r\n";
$OUT['site']['head'] = $_CONF['js'].$_CONF['styles'];

if($OUT['site']['notification'] > '') $OUT['site']['notification'] = '<div class="notification">'.$OUT['site']['notification'].'</div>';

$OUT['site']['content'] = $tpl->getTpl(CORE_PATH.TPL_PATH.'modules/'.MOD.'/'.$OUT['mod']['tpl'].'.tpl', $OUT['mod']);
$content = $tpl->getMainTpl($OUT['site']);

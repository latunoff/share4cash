<?php
$module = 'slinks';   //here can be some selection of modules
//$module = 'termin';
if(isset($_POST["js"]) || isset($_GET["js"])){
    define('JS',1);
    require_once($_SERVER['DOCUMENT_ROOT'].'/cfg.php');
    require_once(CORE_PATH.'cfg_cms.php');
    require_once(CORE_PATH.'inc.php');
}

$params = getvar('params', 'G', 'SQL', 255);
$pa = explode('/', $params);
if(!isset($pa[0]))$pa[0] = '';
define('MENU', $pa[0]);
if(!isset($pa[1]))$pa[1] = '';
define('LINK', $pa[1]);

define('MOD', $module);
$id = getvar('id', 'G', 'INT', 20);
$item = getvar('item', 'G', 'INT', 20);
global $OUT;

if(!defined('URL_PATH'))define('URL_PATH','');

$_CONF['js'] = array('/js/script.js', '/js/jquery.js');
$_CONF['styles'] = array(TPL_PATH.'css/style.css', '/templates/default/css/mw.css');

if( $module == 'termin' ){
    $_CONF['styles'][] = '/modules/datepicker/css/layout.css';
    $_CONF['styles'][] = '/modules/datepicker/css/datepicker.css';
    $_CONF['js'][] = '/modules/datepicker/js/datepicker.js';
    $_CONF['js'][] = '/modules/datepicker/js/eye.js';
    $_CONF['js'][] = '/modules/datepicker/js/utils.js';
    $_CONF['js'][] = '/modules/datepicker/js/layout.js'; 
}

$tpl = new Tpl();

$OUT['site']['content'] = $OUT['site']['message'] = $OUT['site']['error'] = '';

define('ENTER_SID', rand(111111, 999999));
require_once(CORE_PATH.'modules/login/login.php');

require_once(CORE_PATH.'modules/'.MOD.'/'.MOD.'.php');

$_CONF['styles'] = '<link href="'.URL_PATH.implode('" rel="stylesheet" type="text/css" />'."\r\n".'<link href="'.URL_PATH, $_CONF['styles']).'" rel="stylesheet" type="text/css" />'."\r\n";
$_CONF['js'] = '<script src="'.URL_PATH.implode('"></script>'."\r\n".'<script src="'.URL_PATH, $_CONF['js']).'"></script>'."\r\n";
$OUT['site']['head'] = $_CONF['js'].$_CONF['styles'];

$OUT['site']['content'] .= '<span class="error">'.$OUT['site']['error'].'</span>';
$OUT['site']['content'] .= '<span class="message">'.$OUT['site']['message'].'</span>';

$OUT['site']['content'] .= $tpl->getTpl(CORE_PATH.TPL_PATH.'modules/'.MOD.'/'.$OUT['mod']['tpl'].'.tpl', $OUT['mod']);
//ea($OUT['site']);
$content = $tpl->getMainTpl($OUT['site']);

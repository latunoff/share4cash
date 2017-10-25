<?php
define('IP',get_ip());
if(!isset($_SERVER["HTTP_USER_AGENT"]))$_SERVER["HTTP_USER_AGENT"] = '';
define('USER_AGENT', substr($_SERVER["HTTP_USER_AGENT"],0,512));

if( function_exists('geoip_country_code_by_name') ){
    define('COUNTRY', geoip_country_code_by_name(IP) );
} else define('COUNTRY', '');

ini_set('display_errors','on'); error_reporting(E_ALL & ~E_STRICT);

define('TPL_PATH','/templates/'.SITE_TPL.'/');
define('LANG', SITE_LANG);

define('EMAIL_HEADERS','Content-Type: text/html; charset=utf-8'."\r\n".'From: '.EMAIL_SITE."\r\n".'Reply-To: '.EMAIL_SITE."\r\n".'X-Mailer: PHP/'.phpversion());

$date=date("d.m.Y");
$time=date("H:i:s");
define('DB_DTM', date('Y-m-d H:i:s'));
define('DTM', $date." ".$time);
define('DB_DT', date('Y-m-d'));
define('DT', $date);
define('TM', $time);

$domain = $_SERVER['SERVER_NAME'];
$domain = preg_replace("/^www\./", '', $domain);
define('CUR_DOMAIN',strtolower($domain));

if(DB_SERVER > '' && DB_USER > '' && DB_NAME > '') $db = new IsDB;

session_start();

define('_SALT_', 'fmf8w44WF$4w');

define('_SID_NAME_', PREF.'user_id');
define('_SSID_NAME_', PREF.'user_sid');

$slot = getvar('slot','G','LAT',11);
if(!$slot) $slot = 'clicks';
$menu = getvar('menu', 'G', 'LAT', 20);

$urlget = '/?slot='.$slot;

$u_id = getvar(_SID_NAME_,'S','INT',11);
$u_sid = getvar(_SSID_NAME_,'S','LAT',50);
if(!$u_id){
    $u_id = getvar(_SID_NAME_,'C','INT',11);
    $u_sid = getvar(_SSID_NAME_,'C','LAT',50);
}

$tpl = new Tpl();

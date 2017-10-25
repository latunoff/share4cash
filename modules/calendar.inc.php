<?php
if (isset($_GET["clndr_js"])){	$clndr_js = 1;
	define('_ROOT_PATH_', $_SERVER['DOCUMENT_ROOT'].'/');
	include(_ROOT_PATH_.'cfg.php');
	//include(_ROOT_PATH_.'funcs/functions.php');
	//$site_sess = getvar(ADM_PREF.'adm_site','C','TXT',100);
	//if($site_sess == '')require(SITE_DEFAULT_PATH.'/cfg.php'); else require(base64_decode(urldecode($site_sess)).'/cfg.php');

	include (CORE_PATH.'/inc.php');
	
}else{
	$clndr_js = 0;
}
include (CORE_PATH.'/modules/calendar.php');

$id = getvar('id','G','INT',11);
$mini = getvar('mini','G','INT',1);
$dtm_id = getvar('dtm_id','G','TXT',50);
$y = getvar('year','G','INT',4);
$m = getvar('month','G','INT',2);
$day = getvar('day','G','SQL',10);
$time = getvar('time','G','SQL',10);
if(!$time)$time = TM;
$date_1 = getvar('date_1','G','SQL',10);
$date_2 = getvar('date_2','G','SQL',10);
$urlget = str_replace('&date_1='.$date_1, '', $urlget);
$urlget = str_replace('&date_2='.$date_2, '', $urlget);
$urlget = str_replace('&day='.$day, '', $urlget);

if ($y == '')$y = date('Y');
if ($m == '')$m = date('n');
if($m < 10)$m_db = '0'.$m; else $m_db = $m;
if($day > '' && strtotime($day) == '' && $day != 777)$day = date("Y-m-d");
if ($day > ''){
	$m = intval(date("m", strtotime($day)));
	$m_db = date("m", strtotime($day));
	$y = date("Y", strtotime($day));
}

//echo '-'.$_GET['menu'].'-';
$exist_datestr = '';
$dt_fld = '`dtm`';
if($mini != 1){
    if( false ){
        $dt_fld = '`dt`';
        $res = get_db("SELECT DISTINCT(`dt`) AS dt FROM `".PREF."slinks_stat` WHERE `dt` LIKE '$y-$m_db%'");
        for($i=0;$i<count($res);$i++) $exist_datestr .= $res[$i]['dt'].',';
    }
}
//echo $exist_datestr;
//echo $urlget;
$calendar_table = get_calendar_php($day, $m, $y, $exist_datestr, $urlget, 0, $mini);
if($day == '')$day = date("Y-m-d");
if($day != 777)$day_str = " WHERE $dt_fld LIKE '$day%' "; else $day_str = $dtm_str = ''; 
if($date_1 != '' && $date_2 != ''){
	$day_str = " WHERE $dt_fld>='".dt_db($date_1)."' AND $dt_fld<='".dt_db($date_2)."'";
	$dtm_str = " WHERE `dtm`>='".dt_db($date_1)." 00:00:00' AND `dtm`<='".dt_db($date_2)." 23:59:59'";
}

if($mini == 1){
	$java_acts = 'onclick="set_dtm(\''.$dtm_id.'\',\''.db_dt($day).'\')"';
	if(preg_match("/dtm/i",$dtm_id) || preg_match("/Date/",$dtm_id))$calendar_table .= get_input('text', 'clnd_tm', $time, 8, 'adm_input', 'adm_input_tm dtm', '');
	$calendar_table .= get_btn('',_SAVE_,'btn_save_ru.png','',80,$java_acts).get_btn('',_CLOSE_,'del.png','',20,' style="float:right" onclick="hide_id(\'help\',100,0,10);"').'<div class="clr"><div>';
	$calendar_table .= '<input type="hidden" id="clnd_id2set" value="'.$dtm_id.'">';
}
if ($clndr_js == 1)echo $calendar_table;
?>
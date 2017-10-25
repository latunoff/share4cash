<?php
function get_ip($s=''){
    $ip = '';
    if($s == ''){
		if(isset($_SERVER['REMOTE_ADDR']))$ip = $_SERVER['REMOTE_ADDR'];
		if(isset($_SERVER['SERVER_ADDR']) && $ip == $_SERVER['SERVER_ADDR'] && isset($_SERVER['HTTP_X_REAL_IP']) && $_SERVER['HTTP_X_REAL_IP'] > '')$ip = $_SERVER['HTTP_X_REAL_IP'];
	}else $ip = $s;
	$ip = preg_replace("/[^(\d\.)]/", '', $ip);
	return $ip;
}

function err($msg){
	//email
	$out = '<font color="red">'.$msg.'</font>';
	echo $out;
	return  $out;
}

function getvar($name,$source,$type,$maxlen=0) {
    
	$retarr=array();
    if(is_array($name)){
        foreach($name as $v) {
            $retarr[$v] = getvar($v,$source,$type,$maxlen);
        }
		if(sizeof($retarr)>0) return $retarr;
    }
    switch($source) {
        case 'G':
			if (isset($_GET[$name])){$var=$_GET[$name];}
        break;
        case 'P':
			if (isset($_POST[$name])) {$var=$_POST[$name];}
        break;
		case 'GP':
            if (isset($_GET[$name])){$var=$_GET[$name];} elseif(isset($_POST[$name])) {$var=$_POST[$name];} 
        break;
        case 'C':
            if (isset($_COOKIE[$name])) {$var=$_COOKIE[$name];}
        break;
        case 'S':
            if (isset($_SESSION[$name])) {$var=$_SESSION[$name];}
        break;
        case 'SC':
            if (isset($_SESSION[$name])){$var=$_SESSION[$name];} elseif(isset($_COOKIE[$name])) {$var=$_COOKIE[$name];} 
        break;
        case 'CS':
            if (isset($_COOKIE[$name])){$var=$_COOKIE[$name];} elseif(isset($_SESSION[$name])) {$var=$_SESSION[$name];} 
        break;
		case 'T':
            if (isset(${$name})) {$var=${$name};}
        break;
    }
    if(!isset($var)) return false;
    if(is_array($var)) return false;
    if(get_magic_quotes_gpc()) $var = stripslashes($var);
  	if((empty($var))AND($var != 0)) return false;
    //if ($type == 'INT')$maxlen = 11;
    if ($maxlen>0) $var = substr($var,0,$maxlen);
    //echo "var=".$var;
    switch($type) {
        case 'TXT' : // текст
            //$var = str_replace("'","",$var);
            //$var = str_replace("\\","",$var);
            //$var = str_replace("$","",$var);
			//$var = str_replace("<","",$var);
			//$var = str_replace(">","",$var);
			//$var = str_replace("/","",$login);
			//$var = str_replace(".","",$login);
			//$var = str_replace("`","",$login);
			$var = str_replace('`',"",$var);
            $var = strip_tags(trim($var));
			//$var = htmlspecialchars($var);	
			$var = preg_replace("/ +/", " ", $var);
			$var = preg_replace("/(\r\n){2,}/", "\r\n", $var);
			//$test = nl2b($text);
			$var = sql_escape($var);
            //$var = str_replace("\n","",$var);
			return $var;
        break;
        case 'SQL' :
            $var = trim($var);
			$var = htmlspecialchars($var);
			$var = sql_escape($var);
			//echo $var;
            
            return $var;
        break;
		case 'HTML' : 
            //$var = strip_tags($var, '<a><b><i><u><br><hr><p><span>');
			return sql_escape(trim($var));
        break;
		case 'INT' :
            //if (preg_match("|^[\d]+$|D", $var)) return $var; else return false;//intval($var);
			return (is_integer($var) || is_numeric($var)) ? $var : false;//intval($var);/*is_integer is_numeric*/
        break;
		case 'DIG' :
            if (preg_match("|^[\d]+$|D", $var))return $var; else return false;
        break;
        case 'TEL' :
            //if (preg_match("/^[\d-() \+]{6,15}$/DUis", $var)) return $var; else return false;
            if (preg_match("/^[\d\+]{6,15}$/DUis", $var)) return $var; else return false;
        break;
        case 'LAT' :
            if (preg_match("/^[0-9a-zA-Z_\-\.,]+$/Dis", $var)) return $var; else return false;
        break;
		case 'LET' :
            if (preg_match("/^[0-9a-zA-Zа-яА-Я_\-\.,]+$/Duis", $var)) return $var; else return false;
        break;
		case 'DOMEN' :
            if (preg_match("/^[a-zа-я][a-zа-я0-9\.\-]+\.[a-zа-я]+$/Duis", $var)) return $var; else return false;
        break;
        case 'SYM' :
            $var = strip_tags(trim($var));
			$s = preg_replace("/[^(\w)|(\x7F-\xFF)|(\s)]/", '', u_w($var));
			$s = str_replace(" ", '_', $s);
			//$s = str_replace("№", '', $s);
			//$s = preg_replace("/[а-яa-z_ ]+/i", '', $s);
			return w_u($s);
        break;
        case 'NUM' :
            return is_numeric($var) ? $var : false;
        break;
        case 'FLOAT' : 
            return is_float($var) ? $var : false;
        break;
		case 'URL' :
            $var = urldecode($var);
            return $var;
        break;
		case 'PATH' :
            return secure_path($var);
        break;
		case 'FNAME':
            return preg_match('/^[\w\.,\-!;]{1,255}$/',$var) ? $var : '';
        break;
        case 'MAIL':
            return preg_match('/^[\w\.\-]+@\w+[\w\.\-]*?\.\w{2,4}$/',$var) ? $var : false;
        break;
		case 'DT':
            return strtotime($var) ? $var : false;
        break;
        case 'TM':
            return strtotime($var) ? $var : false;
        break;
        case 'DTM':
            return strtotime($var) ? $var : false;
        break;
        case 'ALPHANUM' : // числовые и буквенные символы
            return eregi("[^a-zA-Z0-9]",$var) ? $var : false;
        break;
        case 'MD5' :
            return preg_match("/^[a-fA-F0-9]{32}+$/",$var) ? $var : false;
        break;
        case 'SHA1' :
            return preg_match("/^[a-fA-F0-9]{40}+$/",$var) ? $var : false;
        break;
        case 'BOOL':
            return ($var=="1" || $var=="true" || $var=="on") ? true : false;
        break;
    }
}

function sql_escape($var){
	global $db;
	if(defined('DB_NAME')){
        if(DB_NAME > '' && is_object($db))$var = $db->escape($var);
		//else $var = mysql_escape_string($var);
	}
	return $var;
}

function show_debug($debug, $sql, $time=0, $err='0', $show_arr_vars=false)
{
    global $debug_str, $debug_time, $debug_cnt;
    //ea($debug);
	$debug_cnt++;
	$debug_time = $debug_time+$time;
    //echo '='.$sql.'=<br>';
    $cnt = count($debug)-1;
    $str = '';
	if($err != '0'){$str .= '<font color="red">';$font_ps = '</font>';}
	elseif(strlen($sql) < 63000 && preg_match("|".preg_quote($sql)."|Uis", $str)){$str .= '<font color="#dd0">'; $font_ps = '</font>'; $err = '';}
	else {$font_ps = '';$err = '';}
    $sql .= ' ['.$time.']';
	for($i=0;$i<=$cnt;$i++){
        $args = $tab_str = '';
        for($j=1;$j<=$i;$j++)$tab_str .= '&nbsp;&nbsp;';
        if(isset($debug[$cnt-$i]['args']))
        for($j=0;$j<count($debug[$cnt-$i]['args']);$j++){
			if($j > 0)$args .= ',';
			if($show_arr_vars && is_array($debug[$cnt-$i]['args'][$j]))$debug[$cnt-$i]['args'][$j] = print_r($debug[$cnt-$i]['args'][$j], true);
			if(is_string($debug[$cnt-$i]['args'][$j]))$args .= '"'.($debug[$cnt-$i]['args'][$j]).'"';
        }
        if($debug[$cnt-$i]['function'] == 'sql_error' || $debug[$cnt-$i]['function'] == 'err')break;
		$str .= $tab_str.$debug[$cnt-$i]['file'].':'.$debug[$cnt-$i]['line'].'  {<b>'.$debug[$cnt-$i]['function'].'</b>(<i>'.$args.'</i>)'.'}<br>';
    }
	if(DEBUG == 1){
		$debug_str .= $str;
		$debug_str .= '<br>'.$debug_cnt.'.['.($sql).']'.$err.$font_ps.'<hr>';
	}
	return $str;
}

function email($email, $subject, $msg, $headers=EMAIL_HEADERS){
	$res = mail($email, $subject, $msg, $headers);
    if($res){
        $type = 0;
        $msg = 'E-Mail. {_MESSAGE_SENT_}: to '.$email.' - '.$subject;
    }else{
        $type = 1;
        $msg = 'E-Mail. {_ERROR_MSG_SENT_}: to '.$email.' - '.$subject.' ('.$headers.')';
    }
    //if(LOG_NOTIFIES == 1)report(MOD, $msg, $type);
    return $res;
}

function ea($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function fileext($str, $mode=0){
    $str = preg_replace("/\?.*/", '', $str);
	for($i=strlen($str);$i>=0;$i--){
		if(isset($str[$i]) && $str[$i] == '.'){
			if($mode == 0)return substr($str, $i, strlen($str)-$i);
			else return substr($str, $i+1, strlen($str)-$i);
		}
    }
	return '';
}

//$mode: 0 - digits && letters any case, 1 - digits && letters lowercase, 2 - digits && letters uppercase, 3 - digits
function random_str($length=8, $mode=0){
    $str = "";
    for($i=0;$i<$length;$i++){
        $n_s = rand(0,1);
        if ($n_s == 0 || $mode == 3)$str .= rand(1,9);
        else{
            $up_low = rand(0,1);
            $sn = rand(65,90);
            $s = chr($sn);
            if($mode != 2 &&($mode == 1 || $up_low == 1))$s = strtolower($s);
            $str .= $s;
        }
    }
    return $str;
}

function dt_db($dt){
  if($dt == '' || strtotime($dt) == '')return '';
  return date("Y-m-d", strtotime($dt));
}

function db_dt($dt){
    if($dt == '' || $dt == '0000-00-00' || strtotime($dt) == '')return '';
	return date("d.m.Y", strtotime($dt));
}

function db_tm($dt){
  if($dt == '' || strtotime($dt) == '')return '';
  return date("H:i", strtotime($dt));
}
function dtm_db($dt){
	if($dt == '' || strtotime($dt) == '')return '';
	return date("Y-m-d H:i:s", strtotime($dt));
}
function db_dtm($dt){
	if($dt == '' || $dt == '0000-00-00 00:00:00' || strtotime($dt) == '')return '';
	return date("d.m.Y H:i:s", strtotime($dt));
}
function db2dtm($dt){
    if($dt == '' || $dt == '0000-00-00 00:00:00' || strtotime($dt) == '')$out = '';
    return date("d.m.Y H:i", strtotime($dt));
}

function dtmu($dt){
	//setlocale(LC_ALL, 'rus');
    if($dt == '' || $dt == '0000-00-00 00:00:00' || strtotime($dt) == '')return 'NO';// = '';
    if(db_dt($dt) == date('d.m.Y'))$out = 'TODAY AT '.db_tm($dt);
    elseif(db_dt($dt) == date('d.m.Y', strtotime('-1 day')))$out = 'YESTERDAY AT '.db_tm($dt);
    //else $out = strftime('%#d %e %B %Y', strtotime($dt));
	else {$stt = strtotime($dt); $out = date("l", $stt).', '.$out = date("j ", $stt).date("F", $stt).date(" Y ", $stt). 'AT'.date(" H:i", $stt);}
    return $out;
}

function db2tel($tel){
    $tel = preg_replace("/^(\d)(\d{3})(\d{3})(\d{2})(\d{2})$/Uis", '+${1}(${2})${3}-${4}-${5}', $tel);
    return $tel;
}

function url_post($url, $query='', $timeout=30, $cookie='', $referer=''){
	$agent = "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; ".random_str(6).")";
	if(!preg_match("/http:\/\/.*/Uis", $url))$url = 'http://'.$url;
	if(function_exists('curl_init') && $ch = curl_init()){
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, $agent);
		if($referer > '') curl_setopt($ch, CURLOPT_REFERER, $referer);
		if($cookie > ''){
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_COOKIE, $cookie);
		}
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
		$data = curl_exec($ch);
		if(curl_error($ch) == ''){
			curl_close($ch);
			return true;
		}else{
            if(strstr($url, CP_DOMAIN))$url = CP_DOMAIN;
            err('CURL: {_ERROR_CONNECT_}: '.$url.' ('.curl_error($ch).')');
            return false;
        }
		
	}
}

function browse($url, $query='', $cookie='', $referer=''){
	$agent = 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0';//"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; WOW64; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; ".random_str(6).")";
	if(!preg_match("/http[s]:\/\/.*/Uis", $url))$url = 'http://'.$url;
	if(function_exists('curl_init') && $ch = curl_init()){
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		//curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_USERAGENT, $agent);
		//curl_setopt($ch, CURLOPT_REFERER, 'https://service.berlin.de/terminvereinbarung/termin/tag.php?termin=1&dienstleister=122281&anliegen[]=120686&herkunft=1');
		curl_setopt($ch, CURLOPT_REFERER, 'https://service.berlin.de/dienstleistung/121721/');
		curl_setopt($ch, CURLOPT_COOKIESESSION, true);
		//curl_setopt($ch, CURLOPT_COOKIEFILE, CORE_PATH."tmp/browse_cookie.txt");
		//$cf = fopen(CORE_PATH."tmp/browse_cookie.txt","w+");
		curl_setopt($ch, CURLOPT_COOKIEJAR, CORE_PATH."tmp/browse_cookie.txt");
		//curl_setopt($ch, CURLOPT_COOKIEJAR, $_SERVER['DOCUMENT_ROOT']."/browse_cookie.txt");
		//fclose($cf);
		/*if($cookie > ''){
			curl_setopt($ch, CURLOPT_HEADER, 1);
			curl_setopt($ch, CURLOPT_COOKIE, $cookie);
		}*/
		if(strstr($url, 'https:')){
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
		}
		
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
		$data = curl_exec($ch);
		//if($data === false) $data = file_get_contents($url);//echo 'Curl error: "'.$url.'" ' . curl_error($curl);
		
		if(curl_error($ch) == ''){
			curl_close($ch);
			return $data;
		}else{
            //if(strstr($url, CP_DOMAIN))$url = CP_DOMAIN;
            //err('CURL: {_ERROR_CONNECT_}: '.$url.' ('.curl_error($ch).')');
            return false;
        }
	}else echo 'curl_init absent'; 
	return false;
}

function send_post_get_cookie($URL='', $PostData=Array(), $cookie='')
{
    // Отсекаем пустые вызовы:
    if (strlen($URL)<=0) return false;
    // Скопировал строку из FireBug:
    $ua = 'User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; ru; rv:1.9.2.13) Gecko/20101203 MRA 5.7 (build 03796) Firefox/3.6.13';
    // Инициализация объекта:
    $ch = curl_init($URL);
    // показывать заголовки (в них куки):
    curl_setopt($ch, CURLOPT_HEADER, 1); 
    // не показывать тело страницы (для экономии траффика):
    curl_setopt($ch, CURLOPT_NOBODY, 1); 
    // это чтобы прикинуться браузером:
    curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    // можно ставить еще вот это, если удаленный сервер проверяет:
    // curl_setopt($ch, CURLOPT_REFERER, $URL);
    curl_setopt($ch, CURLOPT_POST, 1);
    // включение полей POST в запрос:
    curl_setopt($ch, CURLOPT_POSTFIELDS, $PostData);
    // если нужны печеньки, установим:
    if (strlen($cookie)>0)
        curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    // тормозим стандартный вывод:
    ob_start();
    // запускаем запрос:
        curl_exec ($ch);
        curl_close ($ch);
        // получаем заголовки в массив:
        $headers = explode("\n", ob_get_contents());
    ob_end_clean();
    // выдираем строку печенек:
    for ($i=0, $cnt=count($headers); $i<$cnt; $i++) 
        if (strpos($headers[$i], 'Set-Cookie:') !== FALSE)
            $cookie .= substr($headers[$i], strpos($headers[$i], 'Set-Cookie:')+strlen('Set-Cookie:')); 
    // и возвращаем результат:
    return '='.$cookie.'=';
}
<?php
if(isset($_POST['login']))
{
	$n = 0;
	$login = getvar('login','P','TXT',100);
	$pass = getvar('pass','P','TXT',20);
    
	if( $login > '' && $pass > '' )
	{
        $pass_hash = md5(md5(md5($pass)));
        //$tmp = $db-getAll("SELECT * FROM `"._PREF_."users` WHERE `login`".$logssql.";");
		//echo $login.'-'.$pass;
		if ( $login == 'admin' && $pass == ADMIN_PASS/*$pass_hash == '3224f5f6a77f0d0397e0d1f79d07c814'*/){
					{
						$_SESSION[_SID_NAME_] = 1;
						$_SESSION[_SSID_NAME_] = md5($login.$pass_hash.SALT);
						$_COOKIE[_SID_NAME_] = 1;
						$_COOKIE[_SSID_NAME_] = md5($login.$pass_hash.SALT);
					}
					header('location: /cp/');
		}
		else {sleep(3); echo('WRONG_USERPASS'); }
	}
	else {sleep(3); echo('INPUT_USERPASS'); }
	
}

if($menu == 'out'){
    $_SESSION[_SID_NAME_] = $_COOKIE[_SID_NAME_] = '';
    $_SESSION[_SSID_NAME_] = $_COOKIE[_SSID_NAME_] = '';
    header('location: /cp/');
}
?>
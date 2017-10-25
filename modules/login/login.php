<?php
if(isset($_POST['email']))
{
	$n = 0;
	$email = getvar('email','P','MAIL',100);
	$login = $email;//getvar('login','P','TXT',100);
	$pass = getvar('pass','P','TXT',20);
    
	if( $email > '' )
	{
		if( (MENU == 'remind') || ($pass > '' && MENU != 'remind') )
		{
			$pass_hash = md5(md5(md5($pass)));
			$tmp = $db->getAll("SELECT * FROM `".PREF."users` WHERE `email`='".$email."';");
			//ea($tmp);
			if( isset($tmp[0]['id']) ){
				$tmp = $tmp[0];
				//echo $login.'-'.$pass;
				if(MENU != 'remind'){
					if ( $pass_hash == $tmp['pass']){
						{
							$_SESSION[_SID_NAME_] = $tmp['id']; $_SESSION[_SSID_NAME_] = md5($login.$pass_hash.SALT);
							$_COOKIE[_SID_NAME_] = $tmp['id']; $_COOKIE[_SSID_NAME_] = md5($login.$pass_hash.SALT);
						}
						header('location: /');
					}
					else {sleep(3); $OUT['site']['error'] = 'Wrong email or password'; }
				}else{
					//ea($tmp);
					$recovery_link = 'http://'.CUR_DOMAIN.'/remind/'.base64_encode($tmp['id'] .'|' . SALT);
					email($email, SITE_NAME.'. Password recovery', SITE_NAME.'<br>You requested password recovering.<br>To recover password follow the link:<br><br><a href="'.$recovery_link.'">'.$recovery_link.'</a>');
					$OUT['site']['message'] = 'Follow instruction on your E-Mail';
				}
			}
			elseif(MENU == 'remind')
			{
				$OUT['site']['error'] = 'This E-Mail is not found';
			}
			else
			{
				$new_user = array('email'=>$email, 'pass'=>$pass_hash, 'kid'=>rand(10000000, 99999999), 'ip'=>IP, 'dtm'=>DB_DTM);
				$db->insert(PREF.'users', $new_user);
				//ea($new_user);
				$new_user_id = $db->getOne("SELECT MAX(id) FROM ".PREF."users");
				
				$_SESSION[_SID_NAME_] = $new_user_id; $_SESSION[_SSID_NAME_] = md5($login.$pass_hash.SALT);
				$_COOKIE[_SID_NAME_] = $new_user_id; $_COOKIE[_SSID_NAME_] = md5($login.$pass_hash.SALT);
				
				header('location: /');
			}
		}
		else {sleep(1); $OUT['site']['error'] = 'INPUT EMail and password'; }
	}
	else {sleep(3); $OUT['site']['error'] = 'Input correct EMail'; }
	
}

if($menu == 'out'){
    $_SESSION[_SID_NAME_] = $_COOKIE[_SID_NAME_] = '';
    $_SESSION[_SSID_NAME_] = $_COOKIE[_SSID_NAME_] = '';
    header('location: /');
}

if(isset($_SESSION[_SID_NAME_]) && intval($_SESSION[_SID_NAME_]) > 0 ){
	$OUT['site']['form_enter'] = '<a href="/?menu=out" class="button">Sign out</a>';
	$user_str = $db->getAll("SELECT * FROM ?n WHERE id=?i;", PREF.'users', $_SESSION[_SID_NAME_]);
	define('USER_ID', $user_str[0]['id']);
	define('USER_NAME', $user_str[0]['name']);
	define('USER_EMAIL', $user_str[0]['email']);
	define('USER_MONEY', $user_str[0]['money']);
}else{
	if(MENU != 'remind') $OUT['site']['form_enter'] = $tpl->getTpl(CORE_PATH.TPL_PATH.'modules/login/login.tpl', array() ).'<br />';
	define('USER_ID', 0);
	define('USER_NAME', '');
	define('USER_EMAIL', '');
	define('USER_MONEY', 0);
}

if(MENU == 'remind'){
	if(USER_ID == 0){
		$f = new TForm(array( 'name'=>'remind', 'button'=>'Remind', 'actions'=>array('add'=>1) ));
		
		if(LINK != ''){
			$f->set('button', 'Save');
			$OUT['site']['content'] = $f->form( array('password'=>array('label'=>'Enter New Password', 'type'=>'password', 'max'=>255) ) );
			$rec_user_id = explode('|', base64_decode(LINK));
			//ea($rec_user_id);
			if( $f->submit ) {
				//echo $f->submit;
				//ea($f->fields);
				//$db->query("UPDATE ".PREF."users SET group_id=1, `pass`='".md5(md5(md5($f->fields['password']['value'])))."' WHERE id='".$rec_user_id[0]."'");
				$db->update( PREF.'users', array('pass'=>md5(md5(md5($f->fields['password']['value'])))) , $rec_user_id[0]);
				$OUT['site']['content'] = 'New Password saved. You can login with new password. <a href="/">Go to login page</a>';
			}
		}else{
			$OUT['site']['content'] = $f->form( array('email'=>array('label'=>'Input your E-Mail', 'type'=>'email', 'max'=>255, 'placeholder'=>"Email") ) );
		}
	} else $OUT['site']['content'] = '<p>You already logged in</p>';
}
?>
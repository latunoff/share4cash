<?php
//ea($_GET);
/**
 * Redirect by link inserted into browser
 *
 */

$u_id = getvar(_SID_NAME_, 'S', 'INT', 12);

$slink_get = '';
if( preg_match("/^\d+_\w+$/", $params) ) $slink_get = $params;
//$slink = getvar('slink', 'G', 'SQL', '20');



/*
 * Getting new link and saving to DB
 *
 */
$link = getvar('link', 'P', 'URL', '255');
if( $link > '' ){
    $kid = random_str();
    $in = array('user_id'=>1,
                'url'=>$link,
                'kid'=>$kid
                );
    $db->insert('a_slinks', $in);
    //echo 'Your short link is http://'.$_SERVER['SERVER_NAME'].'/'.$kid;
    define('LINK_NEW', 'Your short link is http://'.$_SERVER['SERVER_NAME'].'/'.$kid);
}else{
    define('LINK_NEW', '');
}

    $lnks_stat_count_all = $db->getOne("SELECT COUNT(id) `cnt` FROM `".PREF."slinks_stat` WHERE user_id='$u_id';");
    
    $lnks_stat_row = $db->getAll("SELECT COUNT(id) `cnt`, SUM(`price`)/1000 `profit` FROM `".PREF."slinks_stat` WHERE user_id='$u_id';");
    $pays_sum = $db->getOne("SELECT SUM(`sum`) `sum` FROM `".PREF."slinks_payments` WHERE user_id='$u_id';");
    
    //echo $lnks_stat_row[0]['profit'] - round($pays_sum, 3);
    
    define('PROFIT_MONEY', $lnks_stat_row[0]['profit'] - round($pays_sum, 3) );

if($u_id > 0){
    $menu_list['list'] = array(
                       0=>array('link'=>'/stat', 'name'=>'Statistic'),
                       1=>array('link'=>'/user', 'name'=>'Personal data'),
                       2=>array('link'=>'/pays', 'name'=>'Payments'),
                       3=>array('link'=>'/prices', 'name'=>'Prices'),
                       4=>array('link'=>'/help', 'name'=>'Help'),
                       5=>array('link'=>'/payout', 'name'=>'Payout'),
                      );
    $OUT['site']['menu_main'] = $tpl->getTpl(CORE_PATH.TPL_PATH.'modules/'.MOD.'/menu.tpl', $menu_list);
    //echo MENU;
    
    $content = '';
    //$tpl->getTpl(CORE_PATH.TPL_PATH.'modules/'.MOD.'/nav.tpl', $menu)
    
    $user_kid = $db->getOne("SELECT `kid` FROM `".PREF."users` WHERE `id`='$u_id';");
    
    if(MENU == ''){
        $lnks = $db->getAll("SELECT * FROM `".PREF."slinks` ORDER BY "./*`price` DESC,*/" `dtm` DESC;");
        //ea($lnks);
        //$content .= '<br><br><br><br><br><br><hr>';
        $content .= '<span class="infotext">Your links to share:</span><ul class="links">';
        for($i=0,$ii=count($lnks);$i<$ii;$i++)
            if($lnks[$i]['country'] == '' || ($lnks[$i]['country'] > '' && $lnks[$i]['country'] == COUNTRY ) )
        {
            $slink = CUR_DOMAIN.'/'.$user_kid.'_'.$lnks[$i]['kid'];
            
            $lnks_stat = $db->getAll("SELECT COUNT(id) AS `cnt`, `price`, (COUNT(id)*`price`)/1000 AS `profit` FROM `".PREF."slinks_stat` WHERE user_id='$u_id' AND `link`='".$lnks[$i]['kid']."';");
            //$lnks_stat[0]['price'] = 
            
            //$content .= '<li><a href="http://'.$slink.'" target="_blank">http://'.$slink.'</a>   ( -> '.$lnks[$i]['url'].') <button class="btn2copy" data-clipboard-target="#textarea-example">Copy</button> </li>';
            $content .= '<li><div class="input_group">
                        <span class="input_stat">'.$lnks_stat[0]['cnt'].'x <br style="margin-bottom: 3px;"> $'.$lnks_stat[0]['profit'].'</span>
                        <div class="true_link"> > '.$lnks[$i]['url'].'</div>
                        <input id="slink'.$i.'" value="http://'.$slink.'" type="text">
                        <span class="input_button">
                            <button class="btn2copy" type="button" data-clipboard-target="#slink'.$i.'" title="'.$lnks[$i]['url'].' '.$lnks[$i]['country'].'">
                            <img class="clippy" src="/images/copy.svg" alt="Copy to clipboard" width="13">
                            </button>
                        </span>
                        <div class="social">
                        <div class="socialinner">
                        <a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://'.$slink.'" target="_blank">Facebook</a>
                        <a class="twitter" href="https://twitter.com/home?status=http://'.$slink.'" target="_blank">Twitter</a>
                        <a class="googleplus" href="https://plus.google.com/share?url=http://'.$slink.'" target="_blank">Google+</a>
                        <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=http://'.$slink.'&title=Check%20This%20Out&summary=&source=" target="_blank">LinkedIn</a>
                        </div>
                        </div>
                        
                        <span class="input_note">
                            './*$lnks[$i]['price'].*/'
                        </span>
                        </div>
                        </li>';
        }
        $content .= '</ul>';
        $content .= "
        <script>
        new Clipboard('.btn2copy');
        </script>
        ";
    }
    elseif(MENU == 'stat'){
        if( LINK > '' ){
            $day_zuruck = intval(LINK);
        }else{
            $day_zuruck = 777;
        }
        $stat_day_from = date('Y-m-d', strtotime('-'.$day_zuruck.' day'));
        $day_str = "`dt` >= '".$stat_day_from."'";
        //echo $day_str;
        
        $form = new Form();
        $content .= $form->getSelect( array('name'=>'period', 'value'=>$day_zuruck, 'js'=>'onchange="goto_by_el(this)"',
                                'values'=>array(0=>'Today', 1=>'Yesterday', 7=>'Week', 30=>'Month', 777=>'Total') ) );
        $stat = $db->getAll("SELECT DISTINCT(`link`) as link, COUNT(`link`) AS `cnt`, url
                        FROM `".PREF."slinks_stat`
                        WHERE user_id='".$u_id."' AND ".$day_str."
                        GROUP BY `url`
                        ORDER BY `cnt` DESC;");
        //ea($stat);
        $fields = array('Link'=>'url', 'Link Id'=>'link', 'Clicks'=>'cnt');
        
        
    }
    elseif(MENU == 'user'){
        $form = new Form( array('name'=>'user_data_form', 'db'=>PREF.'users', 'id'=>$u_id) );
        //$content .= $form->getInput( array('name'=>'name', 'placeholder'=>'Account holder firstname and lastname'));
        //$content .= $form->getInput( array('type'=>'email', 'name'=>'paypal', 'placeholder'=>'PayPal E-mail'));
        //$content .= $form->getInput( array('name'=>'iban', 'placeholder'=>'IBAN'));
        $form->fields( array(
                        0=>array('type'=>'email', 'name'=>'paypal', 'placeholder'=>'PayPal E-mail'),
                        1=>array('type'=>'text', 'name'=>'name', 'placeholder'=>'Account holder firstname and lastname'),
                        2=>array('type'=>'text', 'name'=>'iban', 'placeholder'=>'IBAN'),
                        3=>array('type'=>'text', 'name'=>'bic', 'placeholder'=>'BIC')
                            )
                      );
        $content .= $form->form();
    }
    elseif(MENU == 'pays'){
        $stat = $db->getAll("SELECT *
                        FROM `".PREF."slinks_payments`
                        WHERE user_id='".$u_id."'
                        ORDER BY `dtm` DESC;");
        //ea($stat);
        $fields = array('Sum ( $ )'=>'sum', 'Date & time'=>'dtm');
    }
    elseif(MENU == 'prices'){
        $stat = $db->getAll("SELECT *
                        FROM `".PREF."country`
                        WHERE `pay`>0
                        ORDER BY `pay` DESC, `name_en`;");
        //ea($stat);
        $fields = array('From country'=>'name_en', 'Payment ( $ / 1000 clicks )'=>'pay');
    }
    elseif(MENU == 'help'){
        $content .= $tpl->getTpl(CORE_PATH.TPL_PATH.'modules/slinks/help.tpl', array() );
    }
    elseif(MENU == 'payout'){
        if(PROFIT_MONEY > 10)
        {
            $form = new Form( array('name'=>'user_payout_form', 'db'=>PREF.'slinks_payments', 'id'=>0, 'submit'=>'Send Request') );
            
            $form->fields( array(
                            0=>array('type'=>'text', 'name'=>'sum', 'label'=>'Payment', 'value'=>PROFIT_MONEY, 'disabled'=>1),
                            1=>array('type'=>'hidden', 'name'=>'user_id', 'value'=>USER_ID),
                                )
                          );
            $content .= $form->form();
            
            if($form->submit > '') {
                $content .= '<p>Your cash is requested. You will get it in 2 working days.</p>';
            }
            else $content .= '<p>You can request your cash now!</p>';
            
        } else $content .= '<p>Your cash is less than 10$, you can\'t request cash now.</p>';
    }
    
    
    if(isset($fields)){
        $st = ' <div class="st">';
        $st .= ' <div class="st_h"> <div>№</div>';
         foreach($fields as $k => $v){
            $st .= '<div>'.$k.'</div>';
        }
        $st .= '</div>';
        for($i=0,$ii=count($stat);$i<$ii;$i++){
            $st .= ' <div class="st_b">
                        <div>'.($i+1).'</div>';
                //for($j=0,$jj=count($fields);$j<$jj;$j++)
                foreach($fields as $k => $v){
                    $st .= '<div>'.$stat[$i][$v].'</div>';
                }
            $st .= '</div>';
        }
        $st .= '</div>';
        
        $content .= $st;
    }
    
    define('CONTENT', $content);
    //define('PROFIT_CLICKS', $lnks_stat_row[0]['cnt']);
}
else{
    //define('ACTION', file_get_contents(CORE_PATH.TPL_PATH.'modules/login/login.tpl'));
    //define('CONTENT', file_get_contents(CORE_PATH.TPL_PATH.'form.tpl'));
    define('CONTENT', '');
    define('DESCR', 'Paste a link to shorten it');
    
}

//echo $slink_get;
if($slink_get > '')
//if(USER_ID == 0)
{
    $OUT['site']['content'] = '';
    
    //$slink_get = substr($slink_get, 1);
    $slink_data = explode('_', $slink_get);
    //ea($slink_data);
    $link_str = $db->getAll("SELECT * FROM `".PREF."slinks` WHERE `kid`=?s", $slink_data[1]);
    $user_id = $db->getOne("SELECT `id` FROM `".PREF."users` WHERE `kid`=?s;", $slink_data[0]);
    //ea($link_str);
    if(!isset($_SERVER['HTTP_REFERER'])) $_SERVER['HTTP_REFERER'] = '';
    
    if( function_exists('geoip_country_code_by_name') ){
        $country = geoip_country_code_by_name(IP);
    } else $country = '';
    
    $click_price = $db->getOne("SELECT `pay` FROM ".PREF."country WHERE `code`='".$country."';");
    if( $click_price == '' ) $click_price = 0;
    
    $data = array('link_id'=>$link_str[0]['id'], 'user_id'=>$user_id, 'url'=>$link_str[0]['url'], 'link'=>$link_str[0]['kid'],
                  'price'=>$click_price/*$link_str[0]['price']*/, 'ip'=>IP, 'dt'=>DB_DT, 'tm'=>TM,
                  'ref'=>urldecode($_SERVER['HTTP_REFERER']), 'useragent'=>USER_AGENT,
                  'country'=>$country
                );
    //ea($data);
    //echo "SELECT id FROM ".PREF."slinks_stat WHERE `link`='".$link_str[0]['kid']."' AND user_id='$user_id' AND `ip`='".IP."' AND `dt`='".DB_DT."';";
    $exists = $db->getOne("SELECT id FROM ".PREF."slinks_stat
                WHERE `link`='".$link_str[0]['kid']."' AND user_id='$user_id' AND `ip`='".IP."' AND `dt`='".DB_DT."';");
    //ea($exists);
    
    //if( !isset($exists) )
    if(intval($exists) == 0)
    {
        $db->insert(PREF.'slinks_stat', $data);
        
        //$click_price = $db->getOne("SELECT `pay` FROM ".PREF."country WHERE `code`='".$data['country']."';");
        //if( $click_price == '' ) $click_price = 1;
        $db->query("UPDATE ".PREF."users SET `money`=`money`+".($data['price'] / 1000)." WHERE id='$user_id';");
        //$db->update(PREF.'users', array('money'=>), $user_id );
    }
    
    //if( !preg_match("/^http.+/") ) $link_str[0]['url'] = 'http://'.$link_str[0]['url'];   //works strange...
    
    header('Location: //'.$link_str[0]['url']); //uncomment for immediatly redirect
    
    //$tpl_vars['text'] = array('link'=>$link_str[0]['url']);
    //$OUT['site']['content'] = $tpl->getTpl(CORE_PATH.TPL_PATH.'modules/slinks/redirect.tpl', $tpl_vars);
    //$OUT['site']['form_enter'] = '';
    
}


define('TITLE', 'Welcome to Share 4 Cash');

define('PAY_PER_CLICK_1000', 10);//$db->getOne("SELECT MAX(`price`) FROM `".PREF."slinks`;"));//PAY_PER_CLICK*1000);

    //$OUT['mod']['text']['content'] = CONTENT;
    $OUT['mod']['text']['title'] = TITLE;
    $OUT['mod']['tpl'] = 'index';
    
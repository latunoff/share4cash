<?php
//ea($_GET);
/**
 * Redirect by link inserted into browser
 *
 */
$slink = getvar('slink', 'G', 'SQL', '9');
if($slink > ''){
    $slink = substr($slink, 1);
    $link_str = $db->getAll("SELECT * FROM `a_slinks` WHERE `kid`=?s", $slink);
    //ea($link_str);
    $data = array('link_id'=>$link_str[0]['id'], 'user_id'=>1, 'url'=>$link_str[0]['url'], 'link'=>$link_str[0]['kid'], 'ip'=>IP, 'dt'=>DT, 'tm'=>TM, 'ref'=>urldecode($_SERVER['HTTP_REFERER']), 'useragent'=>USER_AGENT);
    $db->insert('a_slinks_stat', $data);
    header('Location: '.$link_str[0]['url']);
}

$title = '';

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

if($u_id > 0){
    $urlget = '/cp/';
    if($menu > '') $urlget .= '?menu='.$menu; else { $urlget .= '?menu=all'; }
    include_once(CORE_PATH.'modules/calendar.inc.php');
    
    if($date_1 > '') $date_link = '&date_1='.$date_1.'&date_2='.$date_2; else $date_link = '';
    $menu_nav = array('text'=>array(
                        'title'=>'Statistic:'
                        ),
                  'list'=>array(
                        0=>array('name'=>'Users', 'link'=>'/cp/?menu=users'.$date_link),
                        1=>array('name'=>'Earnings', 'link'=>'/cp/?menu=earn'.$date_link),
                        2=>array('name'=>'Payments', 'link'=>'/cp/?menu=pays'.$date_link),
                        3=>array('name'=>'Clicks Statistic', 'link'=>'/cp/?menu=clicks'.$date_link),
                        4=>array('name'=>'Search (Referers)', 'link'=>'/cp/?menu=search'.$date_link),
                        //5=>array('name'=>'WebSites', 'link'=>'/cp/?menu=websites'),
                        5=>array('name'=>'All Clicks', 'link'=>'/cp/?menu=all'.$date_link),
                        6=>array('name'=>'Links', 'link'=>'/cp/?menu=links'.$date_link),
                        7=>array('name'=>'Prices', 'link'=>'/cp/?menu=prices'.$date_link),
                        )
                 );
    
    //$manage = '<a href="/?slot=out" class="authopen">Sign out</a><br><br>'.file_get_contents(CORE_PATH.TPL_PATH.'nav.tpl').$calendar_table;
    
    $selectorClass = new Tform();
    
    $menu_nav['text']['filter'] = $selectorClass->getSelect( array('name'=>'period', 'values'=>array(
                //'&day='.DB_DT.''=>'Today',
                '&date_1='.DB_DT.'&date_2='.DB_DT.''=>'Today',
                '&date_1='.date('Y-m-d', strtotime("-1 day")).'&date_2='.date('Y-m-d', strtotime("-1 day")).''=>'Yesterday',
                '&date_1='.date('Y-m-d', strtotime("-7 day")).'&date_2='.DB_DT.''=>'Last 7 days',
                '&date_1='.date('Y-m-d', strtotime("-30 day")).'&date_2='.DB_DT.''=>'Last 30 days',
                '&date_1='.date('Y-m-d', strtotime("-90 day")).'&date_2='.DB_DT.''=>'Last 3 months',
                '&date_1='.date('Y-m-d', strtotime("-365 day")).'&date_2='.DB_DT.''=>'Last year',
                ),
                'value'=>$date_link,
                'zero_text'=>'no',
                'goto'=>1 ) );

    $menu_nav['text']['calendar'] = $calendar_table;
    
    define('ACTION',  $tpl->getTpl(CORE_PATH.TPL_PATH.'modules/'.MOD.'/nav.tpl', $menu_nav) );
    
    $fields = $stat = array();
    //echo '='.$date_1.'=';
    if($date_1 == '') $date_1 = $date_2 = DB_DT;
    $day_str = " WHERE `dtm`>='$date_1 00:00:00' AND `dtm`<='$date_2 23:59:59'";
    //echo $day_str;
    
    //if( !isset($_GET['day']) ) $day_str = '';
    
    if(MENU == 'clicks')    {
        $f = new TForm(array( 'db'=>PREF."slinks_stat", 'order'=>'dtm DESC',
                'select'=>"SELECT DISTINCT(`url`) as `url`, link, country, COUNT(`link`) AS `cnt`, dtm
                        FROM `".PREF."slinks_stat` ".$day_str."
                        GROUP BY `url`",
                'actions'=>array('edit'=>0, 'add'=>0, 'del'=>0),
                'fields'=> array(
                    'url'=>array('label'=>'Link', 'type'=>'text', 'max'=>255, 'uniq'=>1),
                    'link'=>array('label'=>'Link code', 'type'=>'text'),
                    'cnt'=>array('label'=>'Clicks', 'type'=>'text'),
                    'country'=>array('label'=>'Country', 'type'=>'select', 'name'=>"country", 'db'=>PREF."country", 'order'=>"`name_en`", 'dbtype'=>'LAT', 'max'=>2, 'options_name'=>'name_en', 'options_index'=>'code',  'zero_text'=>'All countries',  'zero_value'=>''),
                    'dtm'=>array('label'=>'DateTime', 'type'=>'text'),
                )
            )
        );

        $title = 'All users clicks';
    }
    elseif(MENU == 'search'){
        $f = new TForm(array( 'db'=>PREF."slinks_stat", 'order'=>'cnt DESC',
                'select'=>"SELECT DISTINCT(`ref`) `ref`, COUNT(`ref`) `cnt`, `country`, id
                        FROM `".PREF."slinks_stat` ".$day_str."
                        AND `ref`>''
                        GROUP BY `url`",
                'actions'=>array('edit'=>1, 'add'=>0, 'del'=>0),
                'fields'=> array(
                    'ref'=>array('label'=>'Referers', 'type'=>'text', 'max'=>255, 'uniq'=>1),
                    'cnt'=>array('label'=>'Clicks', 'type'=>'text'),
                    'country'=>array('label'=>'Country', 'type'=>'select', 'name'=>"country", 'db'=>PREF."country", 'order'=>"`name_en`", 'dbtype'=>'LAT', 'max'=>2, 'options_name'=>'name_en', 'options_index'=>'code',  'zero_text'=>'All countries',  'zero_value'=>''),
                )
            )
        );
        
        $title = 'Search queries and referers';
    }
    elseif(MENU == 'websites'){
        $stat = $db->getAll("SELECT DISTINCT(`url`) `url`, COUNT(`url`) `cnt`
                        FROM `".PREF."slinks_stat` ".$day_str."
                        GROUP BY `url`
                        ORDER BY `cnt` DESC;");
        //ea($stat);
        $fields = array('WebSites'=>'url', 'Redirects'=>'cnt');
        
        $title = 'Websites of links';
    }
    elseif(MENU == 'all')    {
        $stat = $db->getAll("SELECT * FROM `".PREF."slinks_stat` ".$day_str." ORDER BY `dtm` DESC;");
        //ea($stat);
        $fields = array('URL'=>'url', 'Country'=>'country', 'Price'=>'price', 'IP'=>'ip', 'DateTime'=>'dtm', 'Referer'=>'ref', 'Code'=>'link');
        
        $f = new TForm(array( 'db'=>PREF."slinks_stat ".$day_str, 'order'=>'dtm DESC',
                'actions'=>array('edit'=>0, 'add'=>0, 'del'=>0),
                'fields'=> array(
                    'url'=>array('label'=>'URL', 'type'=>'text', 'max'=>255, 'uniq'=>1),
                    'price'=>array('label'=>'Price', 'type'=>'text'),
                    'ip'=>array('label'=>'IP', 'type'=>'text'),
                    'ref'=>array('label'=>'Referer', 'type'=>'text'),
                    'country'=>array('label'=>'Country', 'type'=>'select', 'name'=>"country", 'db'=>PREF."country", 'order'=>"`name_en`", 'dbtype'=>'LAT', 'max'=>2, 'options_name'=>'name_en', 'options_index'=>'code',  'zero_text'=>'All countries',  'zero_value'=>''),
                    'link'=>array('label'=>'Code', 'type'=>'text'),
                )
            )
        );

        $title = 'All clicks of users';
    }
    elseif(MENU == 'links')    {
        /*
        $content .= '<a href="/cp/?menu=links&item=0"><i class="fa fa-plus" aria-hidden="true"></i></a><br><br>';
        
        if( isset($_GET['item']) )
        {
            if(ACT == '' || ACT == 'edit'){
                if($item == 0){
                    $f = new Form(array(
                                        'name'=>'add_link',
                                        'db'=>PREF."slinks",
                                        'id'=>0,
                                        'className'=>'form_add_link'
                                        ));
                    $f->fields(array(
                                       0=>array('type'=>'text', 'name'=>'url', 'placeholder'=>'http://', 'max'=>255, 'required'=>1, 'uniq'=>1, 'class'=>'url'),
                                       //1=>array('type'=>'select', 'name'=>"country", 'db'=>PREF."country ORDER BY `name_en`", 'dbtype'=>'LAT', 'max'=>2, 'options_name'=>'name_en', 'options_index'=>'code',  'zero_text'=>'All countries'),
                                       1=>array('type'=>'text', 'name'=>'price', 'dbtype'=>'NUM', 'class'=>'price', 'placeholder'=>'...$', 'default'=>'1', 'required'=>1, 'disabled'=>1),
                                       2=>array('type'=>'html', 'html'=>'$'),
                                       3=>array('type'=>'hidden', 'name'=>'dtm', 'dbtype'=>'DTM'),
                                       4=>array('type'=>'hidden', 'name'=>'kid', 'value'=>rand(10000000, 99999999)),
                                        ));
                    $content .= $f->form();
                }
            }
            elseif(ACT == 'del'){
                //echo '='.ITEM;
                $db->delete(PREF.'slinks', ITEM);
                header('Location: /cp/?menu=links');
            }
        }
        
        $stat = $db->getAll("SELECT * FROM `".PREF."slinks` WHERE `user_id`=0 ORDER BY `dtm` DESC;");
        //ea($stat);
        $fields = array('URL'=>'url', '$ / 1000 clicks'=>'price', 'Country'=>'country', 'key'=>'kid', 'DateTime'=>'dtm', ''=>'del');
        */
        
        $f = new TForm(array( 'db'=>PREF."slinks", 'order'=>'dtm DESC',
                        'actions'=>array('edit'=>1, 'add'=>1, 'del'=>1),
                        'fields'=> array(
                           'url'=>array('label'=>'URL', 'type'=>'text', 'max'=>255, 'uniq'=>1),
                           'dtm'=>array('label'=>'Added', 'type'=>'hidden', 'dbtype'=>'DTM'),
                           //'price'=>array('label'=>'IP', 'type'=>'text'),
                           'country'=>array('label'=>'Country', 'type'=>'select', 'name'=>"country", 'db'=>PREF."country", 'order'=>"`name_en`", 'dbtype'=>'LAT', 'max'=>2, 'options_name'=>'name_en', 'options_index'=>'code',  'zero_text'=>'All countries',  'zero_value'=>''),
                           'kid'=>array('label'=>'Id', 'type'=>'hidden', 'value'=>rand(10000000, 99999999), 'when'=>'add' ),
                           //'country'=>array()
                            )
                            )
                       );
        
        $title = 'Links';
    }
    elseif(MENU == 'users' || MENU == '')
    {
        //echo geoip_country_code_by_name(IP);
        //echo geoip_country_name_by_name($_SERVER['REMOTE_ADDR']);
        /*
        $stat = $db->getAll("SELECT t1.id, t1.email, t1.ip, t1.kid, COUNT(t2.id) AS cnt, t1.dtm
                            FROM `".PREF."users` t1, ".PREF."slinks_stat t2
                            WHERE t1.id=t2.user_id
                            GROUP BY t1.email
                            ORDER BY t1.`dtm` DESC;");
        //ea($stat);
        $fields = array('EMail'=>'email', 'IP'=>'ip', 'ID'=>'kid', 'Redirects'=>'cnt', 'DateTime'=>'dtm', ''=>'del');
        */
        
        $f = new TForm(array( 'db'=>PREF."users", 'order'=>'dtm DESC', 'url'=>'?menu=users',
                        'actions'=>array('edit'=>1, 'add'=>0, 'del'=>1, 'search'=>'email'),
                        'fields'=> array(
                           'email'=>array('label'=>'EMail', 'type'=>'email', 'max'=>255, 'uniq'=>1),
                           'dtm'=>array('label'=>'Registered', 'type'=>'hidden', 'dbtype'=>'DTM'),
                           'paypal'=>array('label'=>'PayPal', 'type'=>'email', 'name'=>'paypal', 'placeholder'=>'PayPal E-mail'),
                            'name'=>array('label'=>'Account holder firstname and lastname', 'type'=>'text', 'name'=>'name', 'placeholder'=>'Account holder firstname and lastname', 'table'=>0),
                            'iban'=>array('label'=>'IBAN', 'type'=>'text', 'name'=>'iban', 'placeholder'=>'IBAN', 'table'=>0),
                            'bic'=>array('label'=>'BIC', 'type'=>'text', 'name'=>'bic', 'placeholder'=>'BIC', 'table'=>0),
                            'ip'=>array('label'=>'IP', 'type'=>'text', 'disabled'=>1),
                            'kid'=>array('label'=>'Id', 'disabled'=>1),
                            //'country'=>array('label'=>'Country', 'type'=>'text', 'disabled'=>1)
                            )
                            )
                       );
        
        $title = 'Active users';
    }
    elseif(MENU == 'pays'){
        if(ACT == 'paid'){
            $data = array('paid'=>1);
            $db->update(PREF."slinks_payments", $data, ITEM);
        }
        
        $f = new TForm(array( 'name'=>'payments', 'db'=>PREF."slinks_payments", 'order'=>'`dtm` DESC',
                        'actions'=>array('edit'=>0, 'add'=>1, 'del'=>1),
                        'fields'=> array(
                           'user_id'=>array('label'=>'User', 'type'=>'select', 'name'=>"user_id", 'db'=>PREF."users", 'order'=>"`email`", 'dbtype'=>'INT', 'max'=>11, 'options_name'=>'email', 'required'=>1),
                           'sum'=>array('label'=>'SUM $', 'type'=>'text', 'dbtype'=>'NUM', 'class'=>'price', 'placeholder'=>'...$', 'default'=>1, 'required'=>1),
                           //'dtm'=>array('label'=>'DateTime', 'disabled'=>1),
                           'dtm'=>array('label'=>'DateTime', 'type'=>'hidden', 'dbtype'=>'DTM'),
                            )
                            )
                       );
        
        $title = 'Payments';
    }
    elseif(MENU == 'earn'){
        
        if(ACT == 'paid'){
            $user_earn = $db->getAll("SELECT t1.id as user_id, ROUND(COUNT(t2.id)*t2.price/1000, 3) AS `sum`
                            FROM `".PREF."users` t1, ".PREF."slinks_stat t2
                            WHERE t1.id=t2.user_id AND t1.id='".ITEM."' ");
            //ea($user_earn);
            $db->insert(PREF."slinks_payments", $user_earn[0]);
        }
        
        $f = new TForm(array( 'name'=>'earns', 'db'=>PREF."slinks_payments", 'order'=>'`sum` DESC',
            'select'=> "SELECT t1.id, t1.email, ROUND(COUNT(t2.id)*t2.price/1000, 3) AS `sum`
                        FROM `".PREF."users` t1, ".PREF."slinks_stat t2
                        WHERE t1.id=t2.user_id
                        GROUP BY t1.email",
            'actions'=>array('edit'=>0, 'add'=>1, 'del'=>1),
            'fields'=> array(
                'user_id'=>array('label'=>'User', 'type'=>'select', 'name'=>"user_id", 'db'=>PREF."users", 'order'=>"`email`", 'dbtype'=>'INT', 'max'=>11, 'options_name'=>'email', 'required'=>1),
                'sum'=>array('label'=>'SUM $', 'type'=>'text', 'dbtype'=>'NUM', 'class'=>'price', 'placeholder'=>'...$', 'default'=>1, 'required'=>1),
                //'dtm'=>array('label'=>'DateTime', 'disabled'=>1),
                ),
            'buttons' => array( 'paid' => array('title'=>'Pay', 'image'=>'money'))
            )
        );
        
       $title = 'Users\' Earnings';
    }
    elseif(MENU == 'prices')
    {
        $f = new TForm(array( 'name'=>'countries', 'db'=>PREF."country", 'order'=>'name_en',
                        'actions'=>array('edit'=>1, 'add'=>0, 'del'=>0),
                        'fields'=> array(
                           'name_en'=>array('label'=>'Country', 'type'=>'text', 'max'=>255, 'uniq'=>1, 'class'=>'name', 'disabled'=>1),
                           //'name_en'=>array('type'=>'select', 'name'=>"country", 'db'=>PREF."country ORDER BY `name_en`", 'dbtype'=>'LAT', 'max'=>2, 'options_name'=>'name_en', 'options_index'=>'code',  'zero_text'=>'All countries'),
                           'pay'=>array('label'=>'Payment ( $ / 1000 )', 'type'=>'text', 'dbtype'=>'NUM', 'class'=>'price', 'placeholder'=>'...$', 'default'=>1, 'required'=>1),
                           'code'=>array('label'=>'Code', 'disabled'=>1),
                           //'dtm'=>array('type'=>'hidden', 'dbtype'=>'DTM'),
                            )
                            )
                       );
        
        $title = 'Prices for clicks';
    }

/*
    $st = '<table id="table" class="table table-bordered">';
    $st .= '<thead><tr> <th>№</th>';
     foreach($fields as $k => $v){
        $st .= '<th>'.$k.'</th>';
    }
    $st .= '</tr></thead>';
    for($i=0,$ii=count($stat);$i<$ii;$i++){
        $st .= ' <tr>
                    <td>'.($i+1).'</td>';
            //for($j=0,$jj=count($fields);$j<$jj;$j++)
            foreach($fields as $k => $v){
                if($v == 'del'){
                    $stat[$i][$v] = '<a href="/cp/?menu='.MENU.'&item='.$stat[$i]['id'].'&act=del" title="Delete the item"><i class="fa fa-remove" aria-hidden="true"></i></a>';
                }
                elseif($v == 'dtm'){
                    $stat[$i][$v] = db2dtm( $stat[$i][$v] );
                }
                elseif( strstr($v, '|' )){
                    $v_a = explode('|', $v);
                    if($v_a[0] == 'field'){
                        //ea($v_a);
                        $stat[$i][$v] = $db->getOne("SELECT `".$v_a[3]."` FROM ?n WHERE `id`=?i", $v_a[2], $stat[$i][$v_a[1]]);
                    }if($v_a[0] == 'button'){
                        $stat[$i][$v] = '<a href="/cp/?menu='.MENU.'&item='.$stat[$i]['id'].'&act='.$v_a[1].'" title="'.$v_a[3].'"><i class="fa fa-'.$v_a[2].'" aria-hidden="true"></i></a>';
                        if($v_a[1] == 'paid' && $stat[$i]['paid'] == 1) $stat[$i][$v] = '';
                    }
                }
                $st .= '<td>'.$stat[$i][$v].'</td>';
            }
        $st .= '</tr>';
    }
    $st .= '</table>';
    $st .= '<script type="text/javascript">
  $(\'#table\').dynatable();123
</script>';
    $content .= $st;
*/
    //$content .= $tbl->table;
    //$f->setFields();
    $content .= $f->tform();
    
    if( count( $db->getAll("SELECT id FROM `".PREF."slinks_payments` WHERE `paid`=0;") ) > 0 )
        $OUT['site']['notification'] = 'You have a payout requests!';
    
    //$tpl->getTpl(CORE_PATH.TPL_PATH.'modules/'.MOD.'/nav.tpl', $menu)
    
    /*
    $lnks = $db->getAll("SELECT * FROM `".PREF."slinks` WHERE `user_id`='1';");
    $content .= '<br><br><br><br><br><br><hr>';
    $content .= 'Your links:<ul>';
    for($i=0,$ii=count($lnks);$i<$ii;$i++){
        $slink = CUR_DOMAIN.'/'.$lnks[$i]['kid'];
        $content .= '<li><a href="http://'.$slink.'" target="_blank">http://'.$slink.'</a>   ( -> '.$lnks[$i]['url'].')</li>';
    }
    $content .= '</ul>';
    */
    
    define('CONTENT', $content);
    
    
    define('DESCR', 'Statistics for '.$day);
    
    define('S_MONTH', date('M', strtotime($day)));
    define('S_DAY', date('d', strtotime($day)));
    define('S_YEAR', date('Y', strtotime($day)));
}
else{
    define('ACTION', file_get_contents(CORE_PATH.TPL_PATH.'enter.tpl'));
    define('CONTENT', 'Please log in');//file_get_contents(CORE_PATH.TPL_PATH.'form.tpl'));
    
    define('DESCR', 'Paste a link to shorten it');
    
    define('S_MONTH', date('M'));
    define('S_DAY', date('d'));
    define('S_YEAR', date('Y'));
}

define('TITLE', $title);
define('SITE_TITLE', 'Share 4 Cash Control Panel');

    $OUT['mod']['text']['content'] = CONTENT;
    $OUT['mod']['text']['title'] = TITLE;
    $OUT['mod']['tpl'] = 'index';
    
    
    
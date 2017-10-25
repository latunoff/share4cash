<?php
/**
 *
 *
*/

class Tpl{
    
    function __construct($name='default'){
        $this->tplName = $name;
        $this->tplPath = TPL_PATH;
    }
    
    function getTpl($tpl, $vars, $childs_tpl = '', $tpl_debug=false)
    {
        if($tpl == '')return '';
        $s = $tpl;
        //return '<pre>'.print_r($vars, true).'</pre>';
        //echo $tpl;
        if(is_file($tpl) && fileext($tpl)== '.tpl'){
            if(file_exists($tpl))$s = file_get_contents($tpl);
            elseif(!file_exists($tpl)){if(ERR > 0)show_debug(debug_backtrace(), err('FILE_NOT_EXISTS:'.$tpl.';')); return '';}
        }
        if($s == ''){if(ERR > 0)show_debug(debug_backtrace(), err('Empty template:'.$tpl.';')); return '';}
        //echo $childs_tpl;
        
        $c=0;
        $out = $s;
        
        if(is_array($vars))
        foreach($vars as $k => $data)
        {
            $c++;
            if($c > 1000)die($tpl.' is hanging system.');
            //if($data['mod'] == 'ishop')ea($data);
            if($k == 'content' && preg_match("|{CONTENT}|Uis", $out)){
                $out = preg_replace("|{CONTENT}|Uis", $data, $out);
                if(preg_match("|sectors/center.tpl|", $tpl)){
                    //echo $k.'<br>';
                    //echo $data;
                }
            }
            elseif($k == 'list' && !preg_match("|{CONTENT}|Uis", $out)){
                while(preg_match("/\{\{(.+)\}\}/Us", $out, $out1)){
                    $c++;
                    if($c > 10000)die($tpl.' is hanging system.');
                    if(isset($out1[1]))$item_tpl = $out1[1]; else $item_tpl = '';
                    $items = '';
                    for($i=0;$i<count($data);$i++) if( (isset($data[$i]['name']) && $data[$i]['name'] > '')
                                                    || !isset($data[$i]['name'])
                                                    || (isset($data[$i]['type']) && $data[$i]['type'] == 'item')
                                                    )
                    {
                        $c++;
                        if($c > 10000)die($tpl.' is hanging system.');
                        if(!isset($data[$i]['type']))$data[$i]['type'] = '';
                        if(!isset($data[$i]['num']))$data[$i]['num'] = $i+1;
                        if($i+1 % 2 == 1){$data[$i]['odd'] = 'odd'; $data[$i]['even'] = '0';} else {$data[$i]['odd'] = ''; $data[$i]['even'] = '1';}
                        if ($data[$i]['type'] != 'hidden')
                        {
                            if ($data[$i]['type'] != 'item'){
                                $item = $item_tpl;
                                foreach($data[$i] as $name => $var){
                                    //echo $var.'<br>';
                                    if(!is_array($var)){
                                        if(substr($name, 0, 3) == 'dtm')$var = /*db2dtm*/dtmu($var);
                                        $item = str_replace('{'.strtoupper($name).'}', $var, $item);
                                    }
                                    //if($name == 'link' && $var == '') $item = str_replace('<a', '<span', $item);//preg_replace("/href=\".*\"/", '', $item);
                                }
                            }else{
                                $item = $data[$i]['item'];
                            }
                        }else $item = $data[$i]['element'];
                        $items .= $item;
                        
                    }
                    //echo $items;
                    $out = str_replace('{{'.$item_tpl.'}}', $items, $out);
                    //if($data[0]['mod'] == 'ishop')echo '-'.$item_tpl.'-'.'<br>'.$out;
                }
            }
            elseif(substr($k, 0, 5) == 'list_')
            {
                $lname = substr($k, 5);
                while(preg_match("/\{\{(.+)\}\}/Us", $out, $out1)){
                    $c++;
                    if($c > 10000)die($tpl.' is hanging system.');
                    if(isset($out1[1]))$item_tpl = $out1[1]; else $item_tpl = '';
                    $items = '';
                    for($i=0;$i<count($data);$i++) if( (isset($data[$i]['name']) && $data[$i]['name'] > '')
                                                    || !isset($data[$i]['name'])
                                                    || (isset($data[$i]['type']) && $data[$i]['type'] == 'item')
                                                    )
                    {
                        $c++;
                        if($c > 10000)die($tpl.' is hanging system.');
                        if(!isset($data[$i]['type']))$data[$i]['type'] = '';
                        if(!isset($data[$i]['num']))$data[$i]['num'] = $i+1;
                        if($i+1 % 2 == 1){$data[$i]['odd'] = 'odd'; $data[$i]['even'] = '0';} else {$data[$i]['odd'] = ''; $data[$i]['even'] = '1';}
                        if ($data[$i]['type'] != 'hidden')
                        {
                            if ($data[$i]['type'] != 'item'){
                                $item = $item_tpl;
                                foreach($data[$i] as $name => $var){
                                    //echo $var.'<br>';
                                    if(!is_array($var)){
                                        if(substr($name, 0, 3) == 'dtm')$var = /*db2dtm*/dtmu($var);
                                        $item = str_replace('{'.strtoupper($name).'}', $var, $item);
                                    }
                                    //if($name == 'link' && $var == '') $item = str_replace('<a', '<span', $item);//preg_replace("/href=\".*\"/", '', $item);
                                }
                            }else{
                                $item = $data[$i]['item'];
                            }
                        }else $item = $data[$i]['element'];
                        $items .= $item;
                        
                    }
                    //echo $items;
                    $out = str_replace('{{'.$item_tpl.'}}', $items, $out);
                    //if($data[0]['mod'] == 'ishop')echo '-'.$item_tpl.'-'.'<br>'.$out;
                }
            }
            elseif($k == 'items'){
                $out = preg_replace("/\{\{(.+)\}\}/Uis", $data, $out);
            }
            elseif($k == 'text'){
                foreach($data as $name => $var){
                    if(!is_array($var))$out = str_replace('{'.strtoupper($name).'}', $var, $out);
                }
                //echo $s;
            }
        }
        $out = $this->getTplConstants($out);
        $out = $this->getTplExpressions($out, $vars);
        return $out;
    }
    
    
    
    function getMainTpl($vars)
    {
        $tpl = CORE_PATH.TPL_PATH.'/index.tpl';
        global $modul_view;
        //ea($modul_view);
        $out = '';
        if($tpl > '' && file_exists($tpl)){
            $items = '';
            $s = file_get_contents($tpl);
            $s = preg_replace("/\/\*.*\*\//Us", '', $s);
            //ea($vars);
            foreach($vars as $name => $var)
            {
                if(!is_array($var))$s = str_replace('{'.strtoupper($name).'}', $var, $s);
                
                if($name == 'title'){
                    if(preg_match("|<title>(.*)</title>|Uis", $s)) $s = preg_replace("|<title>(.*)</title>|Uis", '<title>'.$var.'</title>', $s);
                    else $vars['head'] = '<title>'.$var.'</title>'."\r\n";
                }
                if($name == 'keywords' || $name == 'description'){
                    if(preg_match("|<meta( +)content=\"(.*)\"( +)name=\"".$name."\"(.*)>|Uis", $s)) $s = preg_replace("|<meta( +)content=\"(.*)\"( +)name=\"".$name."\"(.*)|Uis", '<meta content="'.$var.'" name="'.$name.'"', $s);
                    elseif(preg_match("|<meta( +)name=\"".$name."\"( +)content=\"(.*)\"(.*)>|Uis", $s)) $s = preg_replace("|<meta( +)name=\"".$name."\"( +)content=\"(.*)\"(.*)|Uis", '<meta content="'.$var.'" name="'.$name.'"', $s);
                    else $vars['head'] .= '<meta content="'.$var.'" name="'.$name.'">'."\r\n";
                }
                if($name == 'site_icon'){$vars['head'] .= '<link rel="icon" href="'.$var.'" type="image/x-icon" />';}
                if($name == 'head'){$s = str_replace("</head>", $vars['head']."\r\n</head>", $s);}
                //if($name == 'for_body')$s = str_replace("<body>", "<body>".$var, $s);
                if($name == 'for_body')$s = preg_replace("/<body(.*)>/", '<body${1}>'.$var, $s);
                if($name == 'end_body'){$s = str_replace("</body>", $var."\r\n</body>", $s);}
            }
            //echo $s;
            $out = $s;
            $out = $this->getTplConstants($out);
            $out = $this->getTplClean($out);
        }//elseif(ERR > 0)show_debug(debug_backtrace(), err(_FILE_NOT_EXISTS_.':'.$tpl));
        return $out;
    }
    
    private function getTplExpressions($s, $vars=array(), $tpl_debug=false)
    {
        if($s > ''){
            $out = $s;
            //echo '-'.$out;
            preg_match_all("/\{(if|inc|repeat):(.*)\{/Us", $out, $exp, PREG_SET_ORDER); //поиск и замена регулярок
            //if(count($exp)>0)ea($exp);
            //if($tpl_debug)echo $out.'<br>';
            //ea($vars);
            
            for($i=0,$ii=count($exp);$i<$ii;$i++){
                if($exp[$i][1] == 'if'){
                    //for($l=0,$ll=3;$l<$ll;$l++)
                    { //для обработки вложенных условий
                        //$exp[$i][0] = str_replace('$','\$',$exp[$i][0]);
                        //if($tpl_debug)echo $exp[$i][0].'<br>';
                        //if(preg_match("/".$exp[$i][0]."(.*)".str_replace('{','{\/',$exp[$i][0])."/Us", $out, $o)){
                        //echo '|'.$out.'|';
                        $exp_quoted = str_replace('$','\$',$exp[$i][0]);
                        if(preg_match("/".$exp_quoted."(.*)}if}/Us", $out, $o)) if(!strstr($o[1], 'if:'))
                        {
                            //echo $i.'-'.$exp[$i][0].'-'."\r\n";
                            //ea($o);
                            $acts = array('==','!=','>','<','>=','<=');
                            for($j=0,$jj=count($acts);$j<$jj;$j++) if(strstr($exp[$i][2], $acts[$j])){
                                $params = explode($acts[$j], $exp[$i][2]);
                                //if($tpl_debug)ea($params);
                                $variable = 0;
                                //ea($params);
                                if(strstr($params[0],'$')) {
                                    //ea($vars);
                                    $var_name = lcase(str_replace('$','',$params[0]));
                                    if(isset($vars['text'][$var_name])) $variable = ($vars['text'][$var_name]);
                                    //if(isset($vars['list'][$i][$var_name])) $variable = ($vars['list'][$i][$var_name]);
                                    //echo $var_name.'="'.$variable.'" at '.$i.'<br>';
                                }//${str_replace('$','',$params[0])};
                                elseif(defined($params[0])) { $variable = constant($params[0]);}
                                else{ $variable = $params[0];}
                                if (preg_match("|^[\d]+$|D", $params[1])) { $variable = intval($variable); $params[1] = intval($params[1]); }
                                if($variable == '') $variable = null;
                                if($params[1] == 'null') $params[1] = null;
                                //if($tpl_debug)
                                //if(MOD == 'ishop')
                                //echo $params[0].':"'.$variable.'"'.$acts[$j].$params[1].'<br>';
                                //echo $vars['text'][str_replace('$','',$params[0])];
                                $newvar = '';
                                //if($acts[$j] == '==')
                                    //echo '"'.$variable.'"'.$acts[$j].'"'.$params[1].'"<br>'."\r\n";
                                if($acts[$j] == '==' && $variable == $params[1])$newvar = $o[1];
                                if($acts[$j] == '!=' && $variable != $params[1])$newvar = $o[1];
                                if($acts[$j] == '>' && $variable > $params[1])$newvar = $o[1];
                                if($acts[$j] == '<' && $variable < $params[1])$newvar = $o[1];
                                if($acts[$j] == '>=' && $variable >= $params[1])$newvar = $o[1];
                                if($acts[$j] == '<=' && $variable <= $params[1])$newvar = $o[1];
                                //$out = preg_replace("/".$exp[$i][0]."(.*)".str_replace('{','{\/',$exp[$i][0])."/Us", $newvar, $out);
                                
                                //$out = preg_replace("/".$exp_quoted."(.*)}if}/Us", $newvar, $out);
                                
                                $out = str_replace($o[0], $newvar, $out);
                            }
                        }
                    }
                }
                /*
                elseif($exp[$i][1] == 'INC'){
                    $params = explode('-', $exp[$i][2]);
                    //ea($params);
                    if($params[0] == 'file'){
                        //echo SITE_PATH.SITE_KID.'/scripts/'.$params[1].'.php';
                        include_once(SITE_PATH.SITE_KID.'/scripts/'.$params[1].'.php'); //НУЖНО ОБДУМАТЬ КАК ЭТО РАЗРЕШИТЬ...
                        //$phpcontent = file_get_contents(SITE_PATH.SITE_KID.'/scripts/'.$params[1].'.php');
                        //$out = preg_replace("/".$exp[$i][0]."/Us", '', $out);
                        if(isset($exp[$i]))$out = str_replace($exp[$i][0], '', $out);
                    }else{
                        if(file_exists(CORE_PATH.'modules/'.$params[0].'/'.$params[0].'.php')){
                            include_once(CORE_PATH.'modules/'.$params[0].'/'.$params[0].'.php');
                            $mod_out = get_site_data($params[0], $params[1]);
                        }
                        //ea($mod_out);
                        if(!isset($mod_out['content']) && isset($params[2]))$mod_out['content'] = get_tpl(SITE_PATH.'tpls/'.SITE_TPL.'/modules/'.$params[0].'/tpls/'.$params[2].'.tpl', $mod_out);
                        if(!isset($mod_out['content']))$mod_out['content'] = '';
                        $out = preg_replace("/".$exp[$i][0]."/Us", $mod_out['content'], $out);
                    }
                }
                */
                elseif($exp[$i][1] == 'repeat'){
                    //echo '='.$exp[$i][2];
                    if(preg_match("/".$exp[$i][0]."(.*)}repeat}/Us", $out, $o)){
                        $repeat_var = '';
                        for($l=0,$ll=intval($exp[$i][2]);$l<$ll;$l++) $repeat_var .= $o[1];
                    }
                    $out = preg_replace("/".$exp[$i][0]."(.*)}repeat}/Us", $repeat_var, $out);
                }
            }
            //if($tpl_debug)echo $out.'<hr>';
            return $out;
        }else return '';
    }
    
    private function getTplConstants($text)
    {
        global $LOC;
        $exp = "|{([A-Z0-9_]+)}|Uis";
        preg_match_all($exp, $text, $m);
        for($i=0; $i<count($m[0]); $i++){  
            if(defined($m[1][$i]))$text = str_replace($m[0][$i], constant($m[1][$i]), $text);
            elseif(isset($LOC[$m[1][$i]])) $text = str_replace($m[0][$i], $LOC[$m[1][$i]], $text);
        }
        return $text;
    }
    
    private function getTplClean($out)
    {
        $out = preg_replace("/\{\{([0-9A-Z_]+)\}\}/Uis", '', $out);
        $out = preg_replace("/\{([0-9A-Z_]+)\}/Uis", '', $out);
        $out = preg_replace("/\{\{.*\}\}/Uis", '', $out);
        return $out;
    }
}
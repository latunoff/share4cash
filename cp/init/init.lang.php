<?php
global $_LOCS,$_LOC;

$result = $db->getAll("SELECT `name`,`var_".LANG."` FROM `".PREF."langs` WHERE `view`=1;");
for($i=0;$i<count($result);$i++){
    $LOC[$result[$i]['name']] = $result[$i]['var_'.LANG];
}
$LOC[''] = '';
/*
$result = get_db("SELECT * FROM `"._PREF_."langs_mods` WHERE `lang`='".LANG."';");
for($i=0,$cnt_i=count($result);$i<$cnt_i;$i++){
    if($result[$i]['hide'] == 1)$result[$i]['var'] = '';
    if($result[$i]['name'] > '')$_LOCS[$result[$i]['name']] = $result[$i]['var'];
}
$_LOCS[''] = '';*/
//ea($_LOCS);
?>
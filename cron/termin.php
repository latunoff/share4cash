<?php
$searches = $db->getAll("SELECT * FROM ?n ORDER BY `dtm`", PREF.'termin_search');
//ea($searches);
for($i=0,$ii=count($searches);$i<$ii;$i++){
    $exists = termin_search($searches[$i]['server'], $searches[$i]['service'], $searches[$i]['dates']);
    if(count($exists) > 0){
        
    }
}
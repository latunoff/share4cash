<?php
function get_calendar_php($day="", $cur_month="", $cur_year="", $exist_datestr="", $url='', $tr=0, $mini=0)
{
	global $dtm_id, $item;
	$calendar_table = '';
	$exist_datestr = "_".$exist_datestr;

	if ($cur_year == '')$cur_year = date('Y');
	if ($cur_month == '')$cur_month = date('n');
	if ($day == '')$day = date("Y-m-d");
	else{
		$cur_month = intval(date("m", strtotime($day)));
		$cur_year = date("Y", strtotime($day));
	}

	$url = str_replace('&day='.$day, '', $url);
	$url = str_replace('&year='.$cur_year, '', $url);
	$url = str_replace('&month='.$cur_month, '', $url);
    $url = str_replace('&id=0', '', $url);
    $url = str_replace('&item='.$item, '', $url);
    //echo $url;
	//$shed_url = $url."&year=$cur_year&month=$cur_month";
	//echo '='.$cur_month.'='.$cur_year.'=';
	$months=array("",'JANR','FEBR','MARCH','APR','MAY','JUNE','JULE','AUG','SEPT','OCT','NOV','DEC');
	$value[1] = ''.'MON'.'|'.'TUE'.'|'.'WED'.'|'.'THU'.'|'.'FRI'.'|'.'SAT'.'|'.'SUN'.'|';
	$qi="2";
	$value[2] = "";

	//$daysamount=date('t',time())+1;
	$daysamount=date('t',mktime(0,0,0,$cur_month,1,$cur_year))+1;
	$weeks=floor($daysamount/7);
	$firstday=date('w',mktime(0,0,0,$cur_month,0,$cur_year));

	// получение данных
	for($i=0;$i<$firstday;$i++) {$value[$qi].="|";}
	for($q=1;$q<$daysamount;$q++) {
		$value[$qi].="$q|";
		if(intval (($i+$q)/7)==($i+$q)/7) {$qi++; $value[$qi]="";}
	}
	// вывод календаря
	$vmax=count($value); $i="0"; $ii="0"; $add="";
	$calendar_table .= "<style>
	.exist{font:11px Verdana; COLOR:#0000ff; FONT-WEIGHT: bold; Background:#ffffff;}
	.sun{COLOR:#aa0000; FONT-WEIGHT: bold;}
	.seg{font:11px Verdana; FONT-WEIGHT: bold; Background:#aaaaff;}
	.cl_sel{font:11px Verdana; FONT-WEIGHT: bold; Background:#cccccc;}
	.day{font:11px Verdana; FONT-WEIGHT: bold;COLOR:#555555;}
	.calendar a{text-decoration:none;}
	</style>";
	if($mini != 1){
		$func = 'get_calendar';
	}else{
		$func = 'get_mini_clnd';
	}
	if($cur_month > 1){$month_prev = $cur_month - 1;$month_prev_year = $cur_year;}else{$month_prev = 12;$month_prev_year = $cur_year-1;}
	if($cur_month < 12){$month_next = $cur_month + 1;$month_next_year = $cur_year;}else{$month_next = 1;$month_next_year = $cur_year+1;}
	if($cur_month < 10)$month_zero = '0'; else $month_zero = '';
	$calendar_table .= "<table align=center border=0 cellpadding=3 cellspacing=0 class='calendar'>
		<caption><b>
			<a href='$url&year=".($cur_year-1)."&month=$cur_month' class=day title=''><<</a>&nbsp;&nbsp;&nbsp;".$cur_year."&nbsp;&nbsp;&nbsp;
			<a href='$url&year=".($cur_year+1)."&month=$cur_month' class=day title=''>>></a>
			<div style='width:150px;margin:0px auto;'>
				<a href='$url&year=$month_prev_year&month=".$month_prev."' class=day title='' style='float:left'><<</a>&nbsp;&nbsp;&nbsp;<a href='$url&day=$cur_year-$month_zero$cur_month'>".$months[$cur_month]."</a>&nbsp;&nbsp;&nbsp;
				<a href='$url&year=$month_next_year&month=".$month_next."' class=day title='' style='float:right'>>></a>
			</div>
		</b></caption>";
	$calendar_table .= "<TR align=middle valign=middle>";
	//$week_start
		$calendar_table .= '<td>'.date('W', strtotime($day)).'</td>';
	$calendar_table .= "</TR>";
	$calendar_table .= "<TR align=middle valign=middle>";
	$weeks_str = $day_link = '';
	do {
		if ($ii=="5") {$add="class=sun";} //else {$add="";}
		elseif ($ii=="6") {$add="class=sun";} else {$add="";}
		
		
		
		do {$i++;
			$rdt = explode("|", $value[$i]);
			if (!isset($rdt[$ii])) {$add=""; $rdt[$ii]="&nbsp;";} else {if ($rdt[$ii]=="") {$add=""; $rdt[$ii]="&nbsp;";}}
			if ($i=="1") {$addbb="<B>";} else {$addbb="";}
			//echo $rdt[$ii].'.'.$cur_month.'.'.$cur_year.'=';
			$java_acts = $cnt = '';
			$addse="";	
			if (intval($rdt[$ii])>0){
				$day_link = date('Y-m-d',mktime(0,0,0,$cur_month,$rdt[$ii],$cur_year));
				if($day_link == $day) {$addse="class='cl_sel'";}
				elseif ($day_link == date('Y-m-d')){$addse="class=seg"; }
				else {$addse="";}
				
				if (strpos($exist_datestr,$day_link) > 0){$addex="class='exist'";} else {$addex="";}
				$budnya="class=day";
				
				$day_link_str = "<a href='$url&day=$day_link' $addse $addex $add $budnya title='$cnt'>";
			}else {
				$day_link_str = ""; $addex="";
			}
			$calendar_table .= "<td $addex $addse $add width='27' align='center' onmouseover='this.bgColor=\"#dddddd\"' onmouseout='this.bgColor=\"\"' style='cursor:pointer;'>$day_link_str $addbb $rdt[$ii]</a></td>";
			
			if ($ii == 0){
				$wb = $day_link;
				$we = date("Y-m-d",strtotime('+6 day',strtotime($day_link)));
				$curr_week = date('W', strtotime($day_link));
				if( $curr_week != 1)$weeks_str .= '<td>'.'<a href='.$url.'&date_1='.$wb.'&date_2='.$we.'>'.$curr_week.'</td>'; else $weeks_str .= '<td></td>';
			}
		} while ($i<$vmax);
		
		
		
		if ($ii<"6") {$calendar_table .= "</tr><TR align=middle valign=middle>";}
		$i="0";
		$ii++;
	} while ($ii<"7");
	 
	$calendar_table .= "</tr><TR align=middle valign=middle>";
	$calendar_table .= $weeks_str;
	$calendar_table .= "</tr>";
	
	$calendar_table .= "</tr></table>";
	return $calendar_table;
}
?>
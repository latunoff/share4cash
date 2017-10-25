var AJX = 0;

function makePOSTRequest(url, parameters, responsefunc) {
   http_request = false;
   if (window.XMLHttpRequest) { // Mozilla, Safari,...
      http_request = new XMLHttpRequest();
      if (http_request.overrideMimeType) {
         // set type accordingly to anticipated content type
         //http_request.overrideMimeType('text/xml');
         http_request.overrideMimeType('text/html');
      }
   } else if (window.ActiveXObject) { // IE
      try {
         http_request = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (e) {
         try {
            http_request = new ActiveXObject("Microsoft.XMLHTTP");
         } catch (e) {}
      }
   }
   if (!http_request) {
      alert('Cannot create XMLHTTP instance');
      return false;
   }
   http_request.onreadystatechange = responsefunc;
   http_request.open('POST', url, true);
   http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   http_request.setRequestHeader("Content-length", parameters.length);
   http_request.setRequestHeader("Connection", "close");
   http_request.send(parameters);
   return true;
}

function EL(id){
	if(id[0] != '.'){
        if(document.getElementById(id))return document.getElementById(id);
    }else{
		cls = id.substr(1);
		all = document.getElementsByTagName('*');
		for(var i=0; i<all.length; i++)if(all[i].className == cls)return all[i];
	}
	return false;
}

function onReady(e){
    if (window.addEventListener) {
		window.addEventListener("DOMContentLoaded",function(){eval(e)}, false)
    } else {
		var oldonload = window.onload;
		if (typeof window.onload != 'function') { window.onload = function(){eval(e)};}
		else {window.onload = function(){ if (oldonload) {oldonload();} eval(e);};}
    }
}

function get_parent(el,parent_tag){
	for(var i=0; i<100; i++) if(el){
		el = el.parentNode;
		if(el && el.tagName == parent_tag)return el;
	}
    return false;
}
/*
$(function(){
    $(".authopen").click(function() {
        $('form.auth').slideDown();
    });
});
*/
onReady("ajax_init()");

function ajax_init() {
    btns = document.getElementsByTagName('input');
    for(var i=0; i<btns.length; i++){
       pfrm = get_parent(btns[i], 'FORM');
       //alert(pfrm.action.substr(0,4));
       //if((btns[i].type == 'submit' || btns[i].type == 'image' || btns[i].name == 'submit') && !btns[i].onclick && pfrm.target == ''){btns[i].onclick = post_form; }
    }
}

function post_form(frm)
{
    var get_post = '';
    var form_name = '';
    var getstr = '';
    var poststr = '';
    //if(frm)alert((this.tagName));
    if(this && this.tagName == 'INPUT')frm = get_parent(this,'FORM');
    attr = frm.attributes;
    for(var i=0; i<attr.length; i++){
        //alert(attr[i].nodeName+'='+attr[i].nodeValue+',');
        if(attr[i].nodeName == "method")get_post = attr[i].value;//nodeValue
        if(attr[i].nodeName == "name")form_name = attr[i].value;
        if(attr[i].nodeName == "action")getstr = attr[i].value;
    }
    if(getstr == '')getstr = document.location+'';
    if(getstr.indexOf('js=1') == -1) getstr = "js=1&"+getstr;
    
    EL("loader").style.display="inline";
    var frm_el = document.forms[form_name].elements;
    var n = frm_el.length;
    var valstr = checkbox1 = '';
    for(var i=0; i<n; i++){
        if(frm_el[i].name != ''){
			if(frm_el[i].type == "checkbox"){
                val = '';
                if(checkbox1 == ''){
                    checkbox1 = frm_el[i].name.substr(0, frm_el[i].name.length-2);
                    for(var j=0; j<10; j++){
                        if(EL(checkbox1+'_'+j+'_id')){
                            if(EL(checkbox1+'_'+j+'_id').checked){if(val > '')val += ''; val += '('+j+')';}
                        }else break;
                    }
                    valstr += checkbox1+'='+val+'&';
                }
                if(frm_el[i].checked)valstr += frm_el[i].name+"=1";
                //else valstr += frm_el[i].name+"=0";
			}else if(frm_el[i].type == "radio"){
			   if(frm_el[i].checked)valstr += frm_el[i].name+"="+frm_el[i].value;
			}else valstr += frm_el[i].name+"="+/*encodeURI*/encodeURIComponent(frm_el[i].value);
			if(i != n-1)valstr += "&";
		}
        //if(frm_el[i].name != '')valstr += '&'+frm_el[i].name+'='+frm_el[i].value;
    }
    //alert('='+valstr);
    
    if(get_post == 'get'){
        getstr += valstr;
        makeGETRequest('/center.php?'+getstr, '', update_center);
    }else{
        //alert(getstr);
        poststr = valstr;
        makePOSTRequest('/center.php?'+getstr, poststr, update);
    }
    return false;
}

function update() {
    if (http_request.readyState == 4) {
        if (http_request.status == 200) {
            result = http_request.responseText;
            //alert(result);
            EL('link_new').innerHTML = result;
            EL("loader").style.display="none";
        } else {
            ajax_error();
        }
    }
}

function gotos(sel){
   var val = sel.options[sel.selectedIndex].value;
   url = window.location.href.replace('http://'+document.domain, '');
   if (url.indexOf('?') > -1)url += '&'; else url = '?';
   goto_by_el_url = url;
   goto_by_el_url = goto_by_el_url.replace(new RegExp("([&\?])"+sel.name+'='+"(.*)&",'g'), '$1');
   //alert(sel.name+'-'+goto_by_el_url);
   goto_by_el_url += sel.name+"="+val;
   if(val > '')document.location = goto_by_el_url;
}

function ajax_error(){
    EL("loader").style.display="none";
    alert('There was a problem with the request.');
}

function goto_by_el(el){
   var val = el.options[el.selectedIndex].value;
   //alert(val);
   //alert(document.location.href);
   //var url = 
   if(AJX === 0) document.location.href = "/stat/"+val;
   else get_main(url+"&field_"+el+"="+mode);
}

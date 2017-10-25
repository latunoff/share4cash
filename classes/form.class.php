<?php
/**
 *
 *
*/

class Form{
    
    private $name = 'form';
    private $tplPath = TPL_PATH;
    private $method = 'P';
    private $action = '';
    public $out = '';
    public $fields = array();
    public $error = false;
    //public $vars = array();
    
    function __construct($params=array()){
        foreach($params as $k => $v){
            if(isset($v)) $this->$k = $v;
        }
        //ea($this);
        //$this->type = ' enctype="multipart/form-data"';
    }
    
    function set($k, $v){
        $this->$k = $v;
    }
    
    function fields($fields)
    {
        global $db;
        $out = '';
        $db_fields = array();
        $submit = getvar('submit', $this->method, 'SQL', 11);
        
        if(isset($this->registration)) $fields[] = array('type'=>'email', 'name'=>'email', 'placeholder'=>'E-Mail', 'require'=>1, 'nodb'=>true);
        
        $db_data = array();
        if( $this->id > 0 ){
            $db_data = $db->getAll("SELECT * FROM ?n WHERE `id`='?i';", $this->db, $this->id);
            $db_data = $db_data[0];
        }
        
        //foreach($fields as $type => $params){
        for($i=0,$ii=count($fields);$i<$ii;$i++){
            $type = $fields[$i]['type'];
            $params = $fields[$i];
            
            if(!isset($params['label'])) $params['label'] = '';
            if(isset($fields[$i]['require'])) $params['label'] .= ' *';
            
            if(isset($fields[$i]['name']) && isset($db_data[ $fields[$i]['name'] ])) $params['value'] = $db_data[ $fields[$i]['name'] ];
            
            if($submit){
                if(isset($fields[$i]['name']) && $fields[$i]['name'] > '')
                {
                    if(!isset($fields[$i]['dbtype'])) $fields[$i]['dbtype'] = 'SQL';
                    if(!isset($fields[$i]['max'])) $fields[$i]['max'] = 255;
                    
                    if($fields[$i]['dbtype'] == 'DTM') $fields[$i]['value'] = DB_DTM;
                    
                    if(!isset($fields[$i]['value'])){
                        $this->fields[$fields[$i]['name']] = getvar($fields[$i]['name'], $this->method, $fields[$i]['dbtype'], $fields[$i]['max']);
                        
                    }
                    else $this->fields[$fields[$i]['name']] = $fields[$i]['value'];
                    
                    if(isset($fields[$i]['required']) && !$this->fields[$fields[$i]['name']]) { $this->error = true; $params['label'] .= ' <font color="red">***</font>'; }
                    
                    if($params['name'] > '' && !isset($params['nodb']))
                    {
                        $db_fields[$fields[$i]['name']] = $this->fields[$fields[$i]['name']];
                    }
                }
            }
            else    //!submit
            {
                if(isset($fields[$i]['default'])) $params['value'] = $fields[$i]['default'];
            }
            
            if(!isset($params['js'])) $params['js'] = '';
            if(isset($params['label']) && $params['label'] > '') $out .= '<label for="'.$params['name'].'_id">'.$params['label'].'</label>';
            switch($type){
                case 'text':
                case 'email':
                    $out .= $this->getInput($params);
                    break;
                case 'select':
                    if(isset($params['db'])){
                        if(!preg_match("/select/i", $params['db'])) $params['db'] = "SELECT * FROM ".$params['db'];
                        if(!isset($params['options_index']) || $params['options_index'] == '') $params['options_index'] = 'id';
                        $a = $db->getInd($params['options_index'], $params['db']);
                        //ea($a);
                        $params['values'] = $a;
                    }
                    if(isset($params['goto'])){
                        $params['js'] .= ' onchange="gotos(this);"';
                    }
                    $out .= $this->getSelect($params);
                    break;
                case 'html':
                    $out .= $params['html'];
                    break;
            }
        }
        
        if($submit && !$this->error)
        {
            if(isset($this->registration)) {
                $user_fields = array('group_id'=>1, 'ip'=>IP);
                $user_fields['email'] = $this->fields['email'];
                $dbuser = $db->getOne("SELECT id FROM ?n WHERE `email`=?s", PREF.'users', $user_fields['email']);
                if($dbuser > 0) $user_fields['id'] = $db_fields['user_id'] = $dbuser;
                else{
                    $user_fields['id'] = $db_fields['user_id'] = $db->getMax(PREF.'users')+1;
                    //ea($user_fields);
                    $db->insert(PREF.'users', $user_fields);
                }
            }
            
            if( $this->id > 0 ) $db->update($this->db, $db_fields, $this->id);
            else $db->insert($this->db, $db_fields);
            //ea($db_fields);
            if( !isset($this->msg) ) $this->msg = 'Saved';
            $this->fields = $this->msg;
            //ea($db_fields);
        }else{
            if( !isset($this->submit) || $this->submit == ''){
                if( !isset($this->id) || $this->id == 0){
                    $this->submit = 'Add';
                }else{
                    $this->submit = 'Save';
                }
            }
            $out .= '<input type="submit" value="'.$this->submit.'" name="submit" class="submit">';
            $this->fields = $out;
        }
    }
    
    function getInput($params)
    {
        $out = $value = $class = $placeholder = '';
        if(!isset($params['type'])) $params['type'] = 'text';
        if(isset($params['value']) && $params['value'] > '') $value = ' value="'.str_replace('"', '&quot;', $params['value']).'"';
        if(isset($params['class']) && $params['class'] > '') $class = ' class="'.$params['class'].'"';
        if(!isset($params['js'])) $params['js'] = '';
        if(isset($params['placeholder']) && $params['placeholder'] > '') $placeholder = ' placeholder="'.$params['placeholder'].'"';
        if(isset($params['maxlength']) && $params['maxlength'] > 0) $maxlength = ' maxlength="'.$params['maxlength'].'" '; else $maxlength = '';
        if(isset($params['disabled']) && $params['disabled'] == 1) $class .= ' disabled="disabled"';
        
        $out = '<input type="'.$params['type'].'" name="'.$params['name'].'" id="'.$params['name'].'_id"'.$value.$class.$maxlength.$placeholder.$params['js'].'>';
        
        return $out;
    }
    
    function getSelect($params)
    {
        $out = $options = $class = '';
        if(isset($params['class']) && $params['class'] > '') $class = ' class="'.$class.'"';
        if(!isset($params['zero_text']) || $params['zero_text'] == '') $params['zero_text'] = ' - - - - - ';
        if(!isset($params['options_name']) || $params['options_name'] == '') $params['options_name'] = 'name';
        if($params['zero_text'] != 'no') $options = '<option value="0">'.$params['zero_text'].'</option>';
        if(!isset($params['js'])) $params['js'] = '';
        if(isset($params['disabled']) && $params['disabled'] == 1) $class .= ' disabled="disabled"';
        $key_shift = 0;
        $sel = '';
        if(isset($params['values']))
        foreach($params['values'] as $k => $v){
            //if($k == 0) $key_shift = 1;
            //if(is_array($values)) $index = $values[$i]; else $index = $i + 1;
            if( isset($params['value']) ){
                if( $k != $params['value']) $sel = ''; else $sel = "selected";
            }
            if(is_array($v)){
                $v = $v[ $params['options_name'] ];
                //$k = $v['code'];
            }
            $options .= '<option '.$sel.' value="'.($k).'">'.$v.'</option>';
        }
        
        $out = '<select name="'.$params['name'].'" id="'.$params['name'].'_id"'.$class.$params['js'].'>'.$options.'</select>';
        
        return $out;
    }
    
    function form()
    {
        if($this->method == 'P')$this->method = 'post'; else $this->method = 'get';
        if(isset($this->className) && $this->className > '')$this->className = ' class="'.$this->className.'"'; else $this->className = '';
        
        $this->out = 
'<form name="'.$this->name.'" action="'.$this->action.'" method="'.$this->method.'"'.$this->className.'>'
.$this->fields.
'</form>';
        return $this->out;
    }
    
}
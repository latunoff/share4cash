<?php
/**
 *  class can outputs Form by ->form();
 *  and Table ->table()
 *  and both by ->tform()
 *
*/

class TForm{
    
    private $action = '';
    private $buttons = [];
    private $method = 'P';
    private $name = 'form';
    private $tplPath = TPL_PATH;
    public $db = '';
    public $error = false;
    public $fields = array();
    public $out = '';
    public $select = '';
    public $submit = false;
    //public $vars = array();
    
    function __construct($params=array()){
        
        global $db;
        
        //ea($params);
        foreach($params as $k => $v){
            if(isset($v)) $this->$k = $v;
        }
        
        $this->id = getvar('id', 'G', 'INT', 12);
        $this->item = getvar('item', 'G', 'INT', 12);
        $this->act = getvar('act', 'G', 'LAT', 10);
        
        if(!isset($this->name)) $this->name = $this->db.'_form';
        if(!isset($this->className)) $this->className = $this->name.'_class';
        //ea($this);
        //$this->type = ' enctype="multipart/form-data"';
        
        if( !isset($this->url) ) $this->table_url_origin = $_SERVER['REQUEST_URI']; else $this->table_url_origin = $this->url;
        $this->table_url_origin = preg_replace( array(
            "/&act=".$this->act."/",
            "/&item=".$this->item."/"
            ),
            array('', ''),
            $this->table_url_origin    
        );
        //echo $this->table_url_origin;
        
        //$this->tplMng = new Tpl();    //better way don't use separated tpl.class, use getTpl func of this class
        
        $this->dbMng = $db;
    }
    
    function set($k, $v){
        $this->$k = $v;
    }
    
    function setFields($fields)
    {
        
        $out = '';
        $db_fields = array();
        
        $submit = getvar('submit', $this->method, 'SQL', 11);
        $this->fid = getvar('fid', $this->method, 'INT', 8);
        
        if(isset($this->registration)) $fields[] = array('type'=>'email', 'name'=>'email', 'placeholder'=>'E-Mail', 'require'=>1, 'nodb'=>true);
        
        $db_data = array();
        if($this->db > '')
        if( $this->item > 0 )
        {
            if( $this->act == 'del' && $this->actions['del'] == 1 ){
                $this->dbMng->delete($this->db, $this->item);
                
                header('Location: '.$this->table_url_origin);
            }
            
            $db_data = $this->dbMng->getAll("SELECT * FROM ?n WHERE `id`='?i';", $this->db, $this->item);
            $db_data = $db_data[0];
        }
        
        foreach($fields as $fname => $params)
        //for($i=0,$ii=count($fields);$i<$ii;$i++)
        {
            if(isset($params['when'])){
                if( ($params['when'] == 'add' && $this->item > 0)
                    || ($params['when'] == 'edit' && $this->item == 0)
                ) continue;
            }
            
            //echo $fname.'<br>';
            if(!isset($params['type'])) $params['type'] = 'text';
            
            $params['name'] = $fname;
            $type = $params['type'];
            $params = $params;
            
            if(!isset($params['label'])) $params['label'] = '';
            if(isset($params['require'])) $params['label'] .= ' *';
            
            if( !$submit )
                if(isset($fname) && isset($db_data[ $fname ])) $params['value'] = $db_data[ $fname ];
            
            if($submit){
                $this->submit = true;
                if(isset($fname) && $fname > '')
                {
                    if(!isset($params['dbtype'])) $params['dbtype'] = 'SQL';
                    if(!isset($params['max'])) $params['max'] = 255;
                    
                    if($params['dbtype'] == 'DTM') $params['value'] = DB_DTM;
                    
                    if(!isset($params['disabled']))
                    if(!isset($params['value'])){
                        $this->fields[$fname]['value'] = getvar($fname, $this->method, $params['dbtype'], $params['max']);
                        //echo $this->fields[$fname]['value'].'===<br>';
                    }
                    else $this->fields[$fname]['value'] = $params['value'];
                    
                    if(isset($params['required']) && !$this->fields[$fname]['value']) { $this->error = true; $params['label'] .= ' <font color="red">***</font>'; }
                    
                    if($params['name'] > '' && !isset($params['nodb']) && !isset($params['disabled']) )
                    {
                        $db_fields[$fname] = $this->fields[$fname]['value'];
                    }
                }
            }
            else    //!submit
            {
                if( $this->item == 0 && isset($params['default'])) $params['value'] = $params['default'];
            }
            
            
            
            if(!isset($params['js'])) $params['js'] = '';
            if( $params['type'] != 'hidden' && isset($params['label']) && $params['label'] > '')
                $out .= '<label for="'.$params['name'].'_id">'.$params['label'].'</label>';
            switch($type){
                case 'text':
                case 'email':
                case 'password':
                    $out .= $this->getInput($params);
                    break;
                case 'select':
                    if(isset($params['db'])){
                        if(!preg_match("/select/i", $params['db'])) $params['db'] = "SELECT * FROM ".$params['db'];
                        if(!isset($params['options_index']) || $params['options_index'] == '') $params['options_index'] = 'id';
                        $a = $this->dbMng->getInd($params['options_index'], $params['db']);
                        //ea($a);
                        $params['values'] = $a;
                    }
                    /*
                    if(isset($params['goto'])){
                        $params['js'] .= ' onchange="gotos(this);"';
                    }*/
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
            
            if( !isset($this->msg) ) $this->msg = 'Saved';
            $this->fieldsHTML = $this->msg;
            //ea($db_fields);
            
            if( $this->db > '' ){
                if( $this->item > 0 ) $this->dbMng->update($this->db, $db_fields, $this->item);
                else $this->dbMng->insert($this->db, $db_fields);
                header('Location: '.$this->table_url_origin);
            }
            
            
        }
        
        {
            if( !isset($this->button) || $this->button == ''){
                if( !isset($this->item) || $this->item == 0){
                    $this->button = 'Add';
                }else{
                    $this->button = 'Save';
                }
            }
            
            $out .= '<input type="hidden" value="'.rand(11111111, 99999999).'" name="fid">';
            $out .= '<input type="submit" value="'.$this->button.'" name="submit" class="submit">';
            
            $this->fieldsHTML = $out;
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
        if(!isset($params['zero_value']) ) $params['zero_value'] = '0';
        if(!isset($params['options_name']) || $params['options_name'] == '') $params['options_name'] = 'name';
        if($params['zero_text'] != 'no') $options = '<option value="'.$params['zero_value'].'">'.$params['zero_text'].'</option>';
        if(!isset($params['js'])) $params['js'] = '';
        if(isset($params['goto'])){
            $params['js'] .= ' onchange="gotos(this);"';
        }
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
    
    function form( $fields = array() )
    {
        if( ($this->item > 0 && $this->actions['edit'] != 1) || ($this->item == 0 && $this->actions['add'] != 1) ) return '';
        
        if($this->method == 'P') $form_method = 'post'; else $form_method = 'get';
        if($this->className > '')$this->className = ' class="'.$this->className.'"'; else $this->className = '';
        
        if(count($fields) == 0) $fields = $this->fields;
        $this->setFields( $fields );
        
        $out = 
'<form name="'.$this->name.'" action="'.$this->action.'" method="'.$form_method.'"'.$this->className.'>'
.$this->fieldsHTML.
'</form>';
        return $out;
    }
    
    function table()
    {
        if($this->db == '') return '';
        $data['list_head'] = array('№');
        $sql_fields = '`id`';
        
        //ea($this->fields);
        
        foreach( $this->fields as $k => $v){
            if(isset($v['table']) && $v['table'] == 0) continue;
            $data['list_head'][] = $v['label'];
            //if($sql_fields > '') $sql_fields .= ',';
            $sql_fields .= ',`'.$k.'`';
        }
        
        if($this->actions['edit'] == 1) $data['list_head'][] = 'Edit';
        if($this->actions['del'] == 1) $data['list_head'][] = 'Del';
        foreach($this->buttons as $bk => $bv) $data['list_head'][] = $bv['title'];
        
        if ($this->select == '')
            $this->select = "SELECT $sql_fields FROM ".$this->db."";
        if ( isset($this->order) ) 
            $this->select .= " ORDER BY ".$this->order.";";
        $data['list_body'] = $this->dbMng->getAll( $this->select );
        
        //ea($data);
        
        for($i=0,$ii=count($data['list_body']); $i<$ii; $i++){
            foreach($data['list_body'][$i] as $k => $v) if( isset($this->fields[$k]['type']) ){
                if( $this->fields[$k]['type'] == 'select' ){
                    if( !isset($this->fields[$k]['options_name']) ) $this->fields[$k]['options_name'] = 'name';
                    if( !isset($this->fields[$k]['options_index']) ) $this->fields[$k]['options_index'] = 'id';
                    //if( !isset($this->fields[$k]['order']) ) $db_order = ''; else $db_order = " ORDER BY ".$this->fields[$k]['order'];
                    $data['list_body'][$i][$k] = $this->dbMng->getOne("SELECT `".$this->fields[$k]['options_name']."` FROM ".$this->fields[$k]['db']." WHERE `".$this->fields[$k]['options_index']."`='$v'");
                }
            }
        }
        
        $out = $this->getTableTpl( CORE_PATH.$this->tplPath.'modules/tform/table.tpl', $data );
        //$this->out .= '<style>#sidebar{position: relative;}</style>';
        return $out;
    }
    
    function tform()
    {
        $this->out = '';
        if( $this->act > '' ){
            $this->out .= $this->form();
        }
        $this->out .= $this->table();
        return $this->out;
    }
    
    function getTableTpl($tpl, $vars)
    {
        $c = 0;
        $out = '';
        
        if($this->actions['add'] != 0)
            $out .= '<div class="add_button"><a href="'.$this->table_url_origin.'&item=0&act=add"><i class="fa fa-plus" aria-hidden="true"></i></a></div>';
        /*
        if( isset($this->actions['search']) && $this->actions['search'] > '' ){
            $out .= '<form class="form_search" name="form_search" action="" method="get">
            <input type="text" value="">
            <input type="submit" value="Search">
            </form>';
        }
        */
        if(is_file($tpl) && fileext($tpl)== '.tpl'){
            if(file_exists($tpl)) $out .= file_get_contents($tpl);
        }
        
        $out = preg_replace("/\/\*.*\*\//Us", '', $out);
        
        //ea($vars);
        if(is_array($vars))
        foreach($vars as $k => $data)
        {
            if($c > 10000)die($tpl.' is hanging system.');
            //if($data['mod'] == 'ishop')ea($data);
            if($k == 'text'){
                foreach($data as $name => $var){
                    if(!is_array($var))$out = str_replace('{'.strtoupper($name).'}', $var, $out);
                }
            }
            elseif(substr($k, 0, 5) == 'list_')
            {
                $lname = substr($k, 5);
                //while(preg_match("/\{\{(.+)\}\}/Us", $out, $out1))
                if(preg_match("/\{$lname\{(.+)\}$lname\}/Us", $out, $out1))
                {
                    //ea($out1);
                    $c++;
                    if($c > 10000)die($tpl.' is hanging system.');
                    
                    $item_orig = $out1[1];
                    
                    $items = '';
                    foreach($data as $rowNum => $rowData)
                    {
                        //ea($rowData);
                        $c++;
                        if($c > 10000)die($tpl.' is hanging system.');
                        
                        $item = $item_orig = $out1[1];
                        
                        //if ($data[$i]['type'] != 'hidden')
                        {
                            if ( is_array($rowData) ){
                                //ea($rowData);
                                if(preg_match("/\{row\{(.+)\}row\}/Us", $item_orig, $out2))
                                {    
                                    $completed_row = str_replace('{VALUE}', $rowNum+1, $out2[1]);   //set row number
                                        
                                    //run through one element of given array and building the table row:
                                    foreach($rowData as $varKey => $var)
                                    if($varKey != 'id')
                                    {
                                        //echo $var.'<br>';
                                        if(!is_array($var)){
                                            if(substr($varKey, 0, 3) == 'dtm')$var = /*db2dtm*/dtmu($var);
                                            $completed_row .= str_replace('{VALUE}', $var, $out2[1]);
                                        }
                                        //if($name == 'link' && $var == '') $item = str_replace('<a', '<span', $item);//preg_replace("/href=\".*\"/", '', $item);
                                    }
                                    
                                    if($this->actions['edit'] != 0)
                                        $completed_row .= str_replace('{VALUE}', '<a href="'.$this->table_url_origin.'&item='.$rowData['id'].'&act=edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>', $out2[1]);
                                    if($this->actions['del'] != 0)
                                        $completed_row .= str_replace('{VALUE}', '<a href="'.$this->table_url_origin.'&item='.$rowData['id'].'&act=del"><i class="fa fa-times" aria-hidden="true"></i></a>', $out2[1]);
                                        
                                    foreach($this->buttons as $bk => $bv){
                                        $completed_row .= str_replace('{VALUE}', '<a href="'.$this->table_url_origin.'&item='.$rowData['id'].'&act='.$bk.'" title='.$bv['title'].'><i class="fa fa-'.$bv['image'].'" aria-hidden="true"></i></a>', $out2[1]);
                                    }

                                    //replace row tpl:
                                    $item = str_replace($out2[0], $completed_row, $item);
                                }
                            }else{
                                $item = str_replace('{VALUE}', $rowData, $item);
                            }
                        }
                        $items .= $item;
                        
                    }
                    
                    //echo '='.$item_orig.'=';
                    $out = str_replace('{'.$lname.'{'.$item_orig.'}'.$lname.'}', $items, $out);
                    //if($data[0]['mod'] == 'ishop')echo '-'.$item_tpl.'-'.'<br>'.$out;
                }
            }
            
        }
        return $out;
    }
    
}
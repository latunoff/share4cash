<?php
/**
 *
 *
 */
class Files{
    
    public static function u_w($s, $force=0){
        if( ($force == 0 && Files::is_utf8($s)) || $force == 1)$s = iconv('UTF-8', 'WINDOWS-1251', $s);
        return $s;
    }
    
    public static function w_u($s, $force=0){
        if( ($force == 0 && !Files::is_utf8($s)) || $force == 1)$s = iconv('WINDOWS-1251', 'UTF-8', $s);
        return $s;
    }
    
    public static function DirFiles($dir){
        if($handle = opendir(Files::u_w($dir))){
            $files = Array();
            while (false !== ($file = readdir($handle))){
                if ($file != "." && $file != ".."){
                    if(!is_dir(Files::u_w($dir."/".$file))){
                      //$file_size = filesize(u_w($dir."/".$file))/1024;
                      $files[] = $file;//." [".number_format($file_size,2)."Kb]";
                    }
                }
            }
            closedir($handle);
        }else err('_ERR_DIR_OPEN_'.': '.$dir);
        sort($files);
        return $files;
    }
    
    public static function is_utf8(&$data, $is_strict = true)
    {
        if (is_array($data))
        {
            foreach ($data as $k => $v) if (! is_utf8($v, $is_strict)) return false;
            return true;
        }
        elseif (is_string($data))
        {
            #the fastest variant:
            if (function_exists('iconv'))
            {
                $distance = strlen($data) - strlen(@iconv('UTF-8', 'UTF-8//IGNORE', $data));
                if ($distance > 0) return false;
                if ($is_strict && preg_match('/[^\x09\x0A\x0D\x20-\xFF]/sS', $data)) return false;
                return true;
            }
            $result = $is_strict ?
                      preg_replace('/(?>[\x09\x0A\x0D\x20-\x7E]           # ASCII
                                      | [\xC2-\xDF][\x80-\xBF]            # non-overlong 2-byte
                                      |  \xE0[\xA0-\xBF][\x80-\xBF]       # excluding overlongs
                                      | [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2} # straight 3-byte
                                      |  \xED[\x80-\x9F][\x80-\xBF]       # excluding surrogates
                                      |  \xF0[\x90-\xBF][\x80-\xBF]{2}    # planes 1-3
                                      | [\xF1-\xF3][\x80-\xBF]{3}         # planes 4-15
                                      |  \xF4[\x80-\x8F][\x80-\xBF]{2}    # plane 16
                                      #| (.)                               # catch bad bytes
                                     )*
                                    /sxS', '', $data) :
                      #The current check allows only values in the range U+0 to U+10FFFF, excluding U+D800 to U+DFFF.
                      preg_replace('/^\X*$/su', '', $data); #\X is equivalent to \P{M}\p{M}*+
            if (function_exists('preg_last_error'))
            {
                if (preg_last_error() === PREG_NO_ERROR) return $result === '';
                if (preg_last_error() === PREG_BAD_UTF8_ERROR) return false;
            }
            elseif (is_string($result)) return $result === '';
    
            #в этом месте произошла ошибка выполнения регулярного выражения
            #проверяем еще одним, но более медленным способом:
            if (! function_exists('utf8_check')) include_once 'utf8_check.php';
            return utf8_check($data, $is_strict);
        }
        elseif (is_scalar($data) || is_null($data)) return true;  #~ null, integer, float, boolean
        #~ object or resource
        echo 'Scalar, null or array type expected, ' . gettype($data) . ' given ';	//trigger_error('Scalar, null or array type expected, ' . gettype($data) . ' given ', E_USER_WARNING);
        return false;
}
}
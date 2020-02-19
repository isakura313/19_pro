<?php


class Util
{
    public static $folder_name = '/19_pro';
    public static function get_full_css($file){
        $path = "<link rel='stylesheet' href='
        http://{$_SERVER['HTTP_HOST']}".self::$folder_name."/{$file}'>";
        return $path;

}
    public static  function get_full_js($file){
        $path = "<script src='http://{$_SERVER['HTTP_HOST']}".self::$folder_name."/{$file}' defer > 
         </script> ";
        return $path;
    }

    public static function get_full_favicon($file){
        $path = "<link rel='rel icon' href='http://{$_SERVER['HTTP_HOST']}".self::$folder_name."/{$file}' type='image/png'>";
        return $path;
    }

    public static function get_full_img($file){
           $path ="http://{$_SERVER['HTTP_HOST']}".self::$folder_name."/{$file}";
           return $path;
    }

}
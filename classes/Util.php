<?php


class Util
{
    public $folder_name = '19_pro';
    public static function get_full_css($file){
        $path = "<link rel='stylesheet' href='
        http://{$_SERVER['HTTP_HOST']}/19_pro/{$file}'>";
        return $path;

}
    public static  function get_full_js($file){
        $path = "http://{$_SERVER['HTTP_HOST']}/19_pro/{$file}";
        return $path;
    }

}
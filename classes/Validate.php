<?php


class Validate
{
   public static  $pattern_name = '/\w{3,}/';
   public  static $pattern_mail = '/\w+@\w+\.\w+/';
   public static $pattern_password =  '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';


   public static function validate_name($user_name){
       if(preg_match(self::$pattern_name , $user_name)){
           return true;
       }
   }

    public static function validate_email($user_password){
        if(preg_match(self::$pattern_mail, $user_password)){
            return true;
        }
    }

    public static function validate_password($user_password){
        if(preg_match(self::$pattern_password, $user_password)){
            return true;
        }
    }
}
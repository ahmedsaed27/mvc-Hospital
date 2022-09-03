<?php
namespace As984\Hospital\core;
class load{

 static $object = [];
public static function set($key , $val){
    self::$object[$key] = $val;
}

public static function get($key){
    return self::$object[$key];
}



}










?>
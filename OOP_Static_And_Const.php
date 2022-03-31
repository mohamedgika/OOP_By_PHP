<?php
class name{ //Access Modifier Static 
    public static $name;
    const con = 23;
    static function b(){
        echo self::$name , self::con;
    }
}

name::$name = "Mohamed Ashraf "; //Call This Static Varriable
echo name::$name;
name::b(); //Call Static By Method
?>
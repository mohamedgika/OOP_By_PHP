<?php

class human
{
    public $color;
    public $name;
    function move(){
        echo 'Move '.$this->name;
    }

}
$h1 = new human();
$h1 -> name = "Mohamed Ashraf ";
$h1 -> move();

class person extends human{ // Take Same Var $name AND $Function From Class Human

}

class baird extends human{

}

$b1= new baird();
$b1 ->name = "Bolo";
$b1 -> move();












?>
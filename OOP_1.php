<?php

class car
{
    public $color;
    function mov(){
        echo 'Move '.$this->color; //This Use To Go The Object (.$this) Connect between Function And Var
    }
}

$bmw = new car();
//var_dump($bmw);
//$bmw-> mov();  //To Access Into Class And Take Var Or Function
$bmw->color = "Red";
//echo $bmw->color; //Print Color Of Object bmw
$bmw->mov();

echo '<br>';

$bmw2 = new car();
$bmw2->color = "Blue";
// echo $bmw2->color; //Print Color Of Object bmw2 
$bmw2->mov();

echo '<br>';

$bmw3 = new car();
$bmw3->color ="Black";
//echo $bmw3->color; //Print Color Of Object bmw3
$bmw3->mov();




?>
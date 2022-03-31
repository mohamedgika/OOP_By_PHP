<?php 
abstract class car 
{
    abstract function move();
    function welcome(){
        echo 'welcome';
    }
}

class bmw extends car
{
   function move(){
       echo 'Move ';
   }

}

$bmw1 = new bmw();
$bmw1 ->move();
$bmw1 ->welcome();






?>
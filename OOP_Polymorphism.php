<?php
interface car{
    function move();
    function drive();
}
interface human{
    function driver();
}

class bmw implements car , human{
    function move(){ //If We Don't Write Function Not Define Interface Class 

    }
    function drive(){

    }
    function driver(){

    }

}
$bmw1 = new bmw();















?>
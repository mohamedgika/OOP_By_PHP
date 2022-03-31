<?php   

class car
{
   function move($num1,$num2){ //Overloading
       echo $num1+$num2;
   } 
   function move($num1,$num2,$num3){
       echo $num1+$num2+$num3;

   }
}

class car1{
    function move($n){
        echo $n;
    }
}
class bmw extends car1{
    function move($n){
        echo $n+10;
    }
}


$c1 = new bmw();
$c1 ->move("mohamed");



?>
<?php
class human
{
    public $color;
    private $name; //Private
    function setname($n) //Function Set And Get To Access Private Varriable OutSide Class
    {
        $this -> name = md5($n); // md5 ---> Funtion تشفير
    }
    function getname()
    {
        return $this->name;
    }

    function move(){
        echo 'Move '.$this->name;
    }
}

$h1 = new human();
$h1 ->setname("Mohamed Ashraf");
echo $h1 ->getname();
?>
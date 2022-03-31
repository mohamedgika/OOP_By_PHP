<?php

trait p1{
    public function p1_func(){
        echo 'p1';
    }
}


trait p2{
    public function p2_func(){
        echo 'p2';
    }
}

class pers{
    use p1,p2;
}

$p = new pers();
$p -> p1_func();
$p -> p2_func();

?>
<?php
class person
{
    function __construct($n)
    {
        echo $n;
    }

    function __set($q, $value)
    {
        echo $value;
    }
    function name($na)
    {
        echo $na;
    }
    function __destruct()
    {
        echo "End";
    }
    function __call($name, $arguments)
    {
        echo "This Method (".$name.") Not Found ";
    }
}
 
$p = new person("MoMo ");
$p ->name('Mohamed ');
$p ->man('Ashraf');
?>
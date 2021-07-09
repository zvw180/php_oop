<?php
class Cars1{
    function gretting(){

    }
    function gretting2(){

    }
}
$the_methods=get_class_methods('Cars1');
foreach ($the_methods as $method){
    echo $method ."<br>";
}
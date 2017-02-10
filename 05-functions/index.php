<?php
$name = 'foo';
$a = 7;

function hello($name)
{
    $a = 5;
    return 'Hello '.$name;
}

var_dump($a); // 7
$a = hello('bar');
var_dump($a); // Hello bar

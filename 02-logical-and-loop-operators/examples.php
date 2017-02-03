<?php

$a = '7';
var_dump(+$a); // int(7)

$b = 4;
var_dump($a % $b); // int(3)

var_dump($a ** $b); // int(2401)

$a = ($b = 4) + 5;
var_dump($a); // int(9)
var_dump($b); // int(4)

var_dump($a += 5); //$a = $a + 5; 14

$str = 'foo';
$str .= 'bar';
var_dump($str);

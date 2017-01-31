<?php
$a = 1;
$b = 1;
var_dump($a == $b); // true
$b = 2;
var_dump($a == $b); // false
$b = '1';
var_dump($a == $b); // true
var_dump($a === $b); // false
var_dump($a > $b); // false

<?php

$a = 1;

function foo($a)
{
    $a = 2;
}

foo($a);
echo $a;

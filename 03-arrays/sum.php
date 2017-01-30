<?php
$a = 0;
$b = 0;
if (isset($_GET['a'])) {
    $a = $_GET['a'];
}
if (isset($_GET['b'])) {
    $b = $_GET['b'];
}

echo $a + $b;

<?php
echo 'პირველი შესაკრები: ';
$handle = fopen("php://stdin", "r");
$num1 = +fgets($handle);

echo 'მეორ შესაკრები: ';
$handle = fopen("php://stdin", "r");
$num2 = +fgets($handle);
echo 'შეკრების შედეგია: '.($num1 + $num2);

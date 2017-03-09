<?php
 

$num_1 = 45;
$num_2 = 15;

function percent($num_1, $num_2) {
$count1 = $num_1 / $num_2;
$count2 = $count1 * 100;
$count = number_format($count2, 0);
echo $count;
}

percent($num_1, $num_2);


?>

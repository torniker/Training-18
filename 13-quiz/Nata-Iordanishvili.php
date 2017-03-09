<h3>Task 1</h3>

<?php
$n=range(1,10);
shuffle($n);
for ($x=0; $x< 5; $x++)
{
	echo "<pre>";
print_r($n[$x].' ');
	echo "<pre/>";
}
?>

<br/>
<h3>Task 2</h3>

<?php
$string = 'abcdefghijk';
$search = array('/a/', '/b/', '/c/', '/d/', '/e/', '/f/', '/g/', '/h/', '/i/', '/j/', '/k/',);
$replace = array('ა', 'ბ', 'ც', 'დ', 'ე', 'ვ', 'ფ', 'გ', 'ჰ', 'ი', 'ჯ');
$new_string = preg_replace($search, $replace, $string);
echo $new_string;
?>

<br/>
<h3>Task 3</h3>

<?php
$arr = array(
				array("id"=>4,"title"=>"ჟუვაჩკა", "price"=>0.1),
				array("id"=>2,"title"=>"შიკოლათი", "price"=>0.8),
				array("id"=>1,"title"=>"ვამფლი", "price"=>0.6)
	);

   foreach($arr as $item => $data)
   {
      if ($data === "ვამფლი")
         return $item;
     print_r($item);

?>

<br/>
<h3>Task 4</h3>

<?php
$var1 = 90;
$var2 = 20;

$count = ($var1 / 100) * $var2;
echo $count;

?>

<br/>
<h3>Task 5</h3>

<?php

function factorial($number) { 
 
    if ($number < 2) { 
        return 1;  
    } else { 
        return ($number * factorial($number-1));  
}
echo factorial(6);
?>

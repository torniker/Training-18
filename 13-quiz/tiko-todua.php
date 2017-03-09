<?php
$nums = range(1, 10);
shuffle($nums);
array_rand($nums, 5);
print_r(array_rand($nums, 5));

?>

<?php
$text = 'es aris teqsti';
$search = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'Z', 'R', 'T', 'S', 'J', 'W', 'C');
$replace = array('ა', 'ბ', 'ც', 'დ', 'ე', 'ფ', 'გ', 'ჰ', 'ი', 'ჯ', 'კ', 'ლ', 'მ', 'ნ', 'ო', 'პ', 'ქ', 'რ', 'ს', 'ტ', 'უ', 'ვ', 'წ', 'ხ', 'ყ', 'ზ', 'ძ', 'ღ', 'თ', 'შ', 'ჟ', 'ჭ', 'ჩ');
$result = str_replace($search, $replace, $text);

echo $result;
?>

<?php
$num1 = 10;
$num2 = 5;
$percentage = ($num1 / $num2) * 100;
echo $percentage."%";
?>
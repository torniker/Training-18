<?php

$str = "Lorem\n Ipsum is\n simply dummy";

echo nl2br($str);
$arr = explode(' ', $str);
echo '<pre>';
print_r($arr); // array of words
echo '</pre>';
echo implode('...', $arr);
echo '<br>';
echo str_replace('  ', ' ', $str);
echo '<br>';
echo strlen($str);
echo '<br>';
echo trim($str);

$foo = 'your email: %s is invalid!';
$foo = sprintf($foo, 'World');
echo $foo;
echo '<br>';
echo strrpos('abcabc', 'abc');
echo '<br>';
$pos = strrpos($str, ' ');
echo substr($str, 0, -1);
?>
<textarea></textarea>

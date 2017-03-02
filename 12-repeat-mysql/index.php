<?php
$link = mysqli_connect('localhost', 'root', '', 'training');
if (!$link) {
    die('Could not connect: '.mysqli_error());
}

$query = "SELECT * FROM students";
$result = mysqli_query($link, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
// echo $rows[3]['firstname'];
// print_r($rows);
mysqli_close($link);

// echo reset($arr);
// echo key($arr);
// echo end($arr);
// echo key($arr);

// shuffle($arr);
// print_r($arr);
// $keys = array_keys($arr);
// print_r($keys);
// $values = array_values($arr);
// print_r($values);
// $search = array_search('bar', $arr);
// var_dump($search);
// in_array();

// function inArr($needle, $haystack)
// {
//     foreach ($haystack as $k => $v) {
//         if ($needle == $v) {
//             return true;
//         }
//     }
//     return false;
// }

// echo rand(0, 9);
// $arr = ['foo' => 'bar', 'bar' => 'baz', 'baz' => 'bar'];
// $keys = array_keys($arr);
// print_r($keys);
// print_r(array_flip($arr));
// $flipped = [];
// foreach ($arr as $k => $v) {
//     $flipped[$v] = $k;
// }
// print_r($flipped);

// print(array_flip($arr));

// ['bar'=>'foo', 'baz'=>'bar', 'bar'=>'baz']
?>
<ul>
<?php foreach ($rows as $r): ?>
	<li><?=$r['firstname']?></li>
<?php endforeach;?>
</ul>
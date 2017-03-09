
<!-- 1) -->

<?php
function Randar($a){
$b=array_rand($a,$num=5);
return $b;	
}
print_r(Randar(['1','2','3','4','6','7','8','9','10']));
?>

<!-- 2 -->

<?php
$a="ssssdsadssd";

function replace($a){
$search  = array('a','s', 'b', 'c', 'd', 'e');
$replace = array('ა','ს' ,'ბ', 'ც', 'დ', 'ე');
 $b=str_replace($search, $replace, $a);
return $b;
}

echo replace('asds');

?>

<!-- 3 -->

<?php
$a=[
 ['id'=>'2', 'name'=>'misho', 'price'=>'0.1'],
 ['id'=>'2', 'name'=>'vaja', 'price'=>'0.2'],
 ['id'=>'4', 'name'=>'soso',  'price' =>'0.2'],
  ['id'=>'4', 'name'=>'soso',  'price' =>'0.2'],
];


  foreach ($a as $value) {
  	if (!in_array('soso',$value)){
  		continue;
  }
  	print_r($value);
  }


?>
<!-- 4 -->
<?php

function Pr($a,$b){
	$c=($a/$b)*100;
	return $c;
}

echo Pr('5','10');


?>





<!-- 5 -->
<?php

function factorial($a){
  $number=$a;
    $f = 1;
   for ($x=$number; $x>=1; $x--)  {
   $f= $f* $x;
   }
   return $f;

}

echo factorial('6');

?>














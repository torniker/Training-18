<?php
/*1 davaleba */ 
function element($min , $max){
$randoma = range( $min , $max);
shuffle($randoma);
return $randoma;
}
$me =  element(1 , 10);
for ($i=0; $i<5; $i++) { 
echo $me[$i] . "<br>";
	}
function randomGen($min, $max, $quantity) {
$numbers = range($min, $max);
shuffle($numbers);
return array_slice($numbers, 0, $quantity);
}
print_r(randomGen(1, 9 ,5));

echo '<br>';
/*2 davaleba */ 
function OUTER($string) {
	    $sityvebisgrova=array('a'=> 'ა','b'=> 'ბ','c'=> 'ც','d'=> 'დ','e'=> 'ე','f'=> 'ფ','g'=> 'გ','h'=> 'ჰ','i'=> 'ი','j'=> 'ჯ','k'=> 'კ','l'=> 'ლ','m'=> 'მ','n'=> 'ნ','o'=> 'ო','p'=> 'პ','q'=> 'ქ','r'=> 'რ','s'=> 'ს','t'=> 'ტ','u'=> 'უ','v'=> 'ვ','w'=> 'წ','x'=> 'ხ','y'=> 'ყ','z'=> 'ზ','S' => 'შ', 'T' => 'თ');

	    $string = strtr($string, $sityvebisgrova);
	    return $string;
	}
	echo '<br>';
	$out = 'gogov iseTi gaqvs rxeva samosis msurs Semoxeva :))))))';
	echo OUTER($out);
echo '</br>';
/*4 davaleba */ 
function procenti(){
$x = 1000;
$y = 10;
echo $x * $y / 100;

}
echo procenti();

echo '</br>';
/*3 davalebasavit*/ 
$zonaze = [
			['id' => '1', 'saxeli' => 'pavlovicha', 'done' => 'mayurebeli','$gapuchebulebi' => 3],
			['id' => '2', 'saxeli' => 'mavlovicha', 'done' => 'kaibichi','$gapuchebulebi' => 4],
			['id' => '3', 'saxeli' => 'tavlovicha', 'done' => 'puwioviki','$gapuchebulebi' => 7],
			['id' => '4', 'saxeli' => 'dachagrulidze', 'done' => 'thebestofqurdi','$gapuchebulebi' => 12],
			];
echo '<br>';
foreach ($zonaze as $s) {
    echo $s['id'].'</br>';
}

echo '<br>';
/*5 davaleba*/ 
function paqtiriali(){
$fuck = gmp_fact(3); // 5 * 4 * 3 * 2 * 1
echo gmp_strval($fuck) . "\n";
}

echo paqtiriali();
<?php 

	// pirveli davaleba 111
	function elementsRand($min , $max){
		$arr = range( $min , $max);
		shuffle($arr);
		return $arr;
	}
	$var =  elementsRand(1 , 10);
	for ($i=0; $i<5; $i++) { 
		echo $var[$i] . "<br>";
	}


	function randomGen($min, $max, $quantity) {
	    $numbers = range($min, $max);
	    shuffle($numbers);
	    return array_slice($numbers, 0, $quantity);
	}
	print_r(randomGen(1, 10 ,5)) ;

	// davaleba 2

	function convertAccentsAndSpecialToNormal($string) {

	    $letters=array('a'=> 'ა','b'=> 'ბ','c'=> 'ც','d'=> 'დ','e'=> 'ე','f'=> 'ფ','g'=> 'გ','h'=> 'ჰ','i'=> 'ი','j'=> 'ჯ','k'=> 'კ','l'=> 'ლ','m'=> 'მ','n'=> 'ნ','o'=> 'ო','p'=> 'პ','q'=> 'ქ','r'=> 'რ','s'=> 'ს','t'=> 'ტ','u'=> 'უ','v'=> 'ვ','w'=> 'წ','x'=> 'ხ','y'=> 'ყ','z'=> 'ზ');

	    $string = strtr($string, $letters);

	    return $string;
	}
	echo '<br>';

	$sityva = 'ravici ras sad ';

	echo convertAccentsAndSpecialToNormal($sityva);


	echo '<br>';
	//davaleba 3

	function percent($a, $b){
		$c = $a/$b * 100;
		return $c.'%';
	}

	echo percent(5 , 20);

	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<br>';




	$double_arr = [
		['id'=> "4" , 'title' => "kevi" , 'price' => "0.5"],
		['id'=> "45" , 'title' => "kevi" , 'price' => "0.5"],
		['id'=> "445" , 'title' => "kevi" , 'price' => "0.5"],
		['id'=> "4544" , 'title' => "kevi" , 'price' => "0.5"],
		['id'=> "3" , 'title' => "shoko" , 'price' => "5"],
		['id'=> "52" , 'title' => "nayini" , 'price' => "2"],
		['id'=> "52" , 'title' => "nayini" , 'price' => "2"],
		['id'=> "52" , 'title' => "nayini" , 'price' => "2"],
		['id'=> "52" , 'title' => "nayini" , 'price' => "2"],

	];
	// funcqciashi ar mushaobss	


// 	function filtArr($arr , $key , $v ){
// 		$arrEmpty = [];
// 		$k = 0;
// 		foreach ($arr as $item) {
// 			$k++;
// 			if ($item[$key] == $v) {
// 				$arrEmpty[$k] = $item;
// 			}else{
// 				continue;
// 			}
		
// 		return $arrEmpty;
// 	}
// }
// 	print_r(filtArr($double_arr , 'title' , 'shoko'));

	//xelit gacerilze mushaobs
	// davaleba 4
	$arrEmpty = [];
	foreach ($double_arr as $item) {
		if ($item['title'] == 'nayini') {
			$arrEmpty[] =$item;
		}else{
			continue;
		}
		
		
	}
	print_r($arrEmpty);


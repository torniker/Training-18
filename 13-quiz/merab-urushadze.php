
<?php
echo 'task 1';
echo '</br>';

$a = rand(1,10);
echo $a;
?>


</br></br></br></br>




<?php


$eng = ['a','b','c','t','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','w','z'];
print_r ($eng);

$geo = ['ა','ბ','გ','დ','ე','ვ','ზ','თ','ი','კ','ლ','მ','ნ','ო','პ','ჟ','რ','ს','ტ','უ','ფ','ქ','ღ','ყ','შ','ჩ'];
print_r ($geo);

?>
</br></br></br></br>
<?php
echo 'task 3';
echo '</br></br>';
$arr = array(
		array('id' => 4, 'title' =>'Jvachka', 'price' => 0.1),
		array('id' => 2, 'title' =>'Shoko', 'price' => 1.2),
		array('id' => 1, 'title' =>'ponch', 'price' => 0.5),
		array('id' => 3, 'title' =>'Limon', 'price' => 0.15)
		);

//print_r ($arr);


?>


</br></br></br></br>
<?php
echo 'task 4';
echo '</br></br>';
function percent($a, $b){
		$c = $a *100/$b;
		return $c . '%';
}
echo percent (5,20);
?>


</br></br></br></br>


<?php
echo 'task 5';
echo '</br></br>';
function factor ($a){
	for ($i=1; $i<$a;$i++){

		$c = $a * ($a-$i);
		
	}
	$c += $c;

return $c;
}
echo factor (5);
 ?>
<?php
$r = range(1,10);
$array=array("0", "1", "2", "3","4","5");
shuffle($r);
print_r($r); 

?>
<?php 

function convertAccentsAndSpecialToNormal($string) {
        $anbani=array('a'=> 'ა','b'=> 'ბ','c'=> 'ც','d'=> 'დ','e'=> 'ე','f'=> 'ფ','g'=> 'გ',
        	'h'=> 'ჰ','i'=> 'ი','j'=> 'ჯ','k'=> 'კ','l'=> 'ლ','m'=> 'მ','n'=> 'ნ','o'=> 'ო',
        	'p'=> 'პ','q'=> 'ქ','r'=> 'რ','s'=> 'ს','t'=> 'ტ','u'=> 'უ','v'=> 'ვ','w'=> 'წ',
        	'x'=> 'ხ','y'=> 'ყ','z'=> 'ზ');

        $string = strtr($string, $anbani);
        return $string;
    }
    echo '<br>';
    $out = 'zviadi da gela midiodnen gzaze :)';
    echo convertAccentsAndSpecialToNormal($out);

    ?>
</br>
    <?php
    $arr = array(
    	   array('id' =>4 ,"title"=>"jivachka", "price"=> 0.1 ),
           array('id' =>2 ,"title"=>"shikoladi", "price"=> 1.2 ),
           array('id' =>1 ,"title"=>"ponchiki", "price"=> 0.5 ),
           array('id' =>3 ,"title"=>"limanadi", "price"=> 0.15 ),
           );
  

        $a = "jivachka";
        $b = "shikoladi";
        $c = "ponchiki";
        $d = "limanadi";
    if ($a< $b)
    {
    	
        if ($a < $b)
        {
        echo $a." პირველია ანბანის რიგით ".$b." მეორე იქნება";
      }
      else{
          echo $a." is after ".$b." in the alphabet";
      }
}


        $c = "ponchiki";
        $d = "limanadi";
      
    	
        if ($c < $d)
        {
        echo $d." პირველია ანბანის რიგით ".$c." ეს მეორე იქნება";
      }
      else{
          echo $c." არის მეორე ანბანის რიგში ".$d." პირველი";
      }


?>
</br>
<?php
$a=50;
$b=5;

function perc($a,$b){
	return $c=$a/$b*100;


}echo perc($a,$b) ;
?>
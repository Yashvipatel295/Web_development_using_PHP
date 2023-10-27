Script_45 Create a PHP script that flips the keys and values of an associative array using the
array_flip() function.
<?php
echo"<br>";
$a=array("1"=>"red","2"=>"blue","3"=>"black");


$flipped = array_flip($a);

print_r($flipped);

/*o/p:
Array ( [red] => 1 [blue] => 2 [black] => 3 )*/

?>
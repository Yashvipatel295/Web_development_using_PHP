Script_43 Develop a PHP script to extract the keys from an associative array using the array_keys()
function.
<?php
echo"<br>";
$a=array("1"=>"red","2"=>"blue","3"=>"black");
print_r(array_keys($a));
/*o/p:
Array ( [0] => 1 [1] => 2 [2] => 3 )*/
?>
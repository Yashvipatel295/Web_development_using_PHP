Script_44 Write a PHP script to extract the values from an associative array using the array_values()
function.
<?php
echo"<br>";
$a=array("1"=>"red","2"=>"blue","3"=>"black");
print_r(array_values($a));
/*o/p:
Array ( [0] => red [1] => blue [2] => black )*/
?>
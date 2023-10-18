<?php
/*Script_30 Create a PHP script that removes duplicate values from an array using the array_unique() 
function*/

$a=array("red","green","red","pink","black","pink");
print_r(array_unique($a));
/*o/p:
Array ( [0] => red [1] => green [3] => pink [4] => black )*/
?>
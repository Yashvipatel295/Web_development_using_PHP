Script_51 Create a PHP script that adds elements to an associative array using the array_push()
function.
<?php
echo "<br>";
$flower = array("lotus", "rose");
array_push($flower, "sunflower", "jasmine");
print_r($flower);
/*o/p:
Array ( [0] => lotus [1] => rose [2] => sunflower [3] => jasmine )
*/
?>
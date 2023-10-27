Script_52 Develop a PHP script to merge two associative arrays using the array_merge() function
and display the combined result.
<?php
echo "<br>";
$ary1 = array("purple","blue","black");
$ary2 = array("pink","white","green");
$result = array_merge($ary1, $ary2);
print_r($result);
/*p/o:
Array ( [0] => purple [1] => blue [2] => black [3] => pink [4] => white [5] => green )
*/
?>
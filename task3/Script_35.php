Script_35 Write a PHP script to shuffle the elements of an array using the shuffle() function.
<?php
echo "<br/>";
$myarray = array("yellow","green","red","blue");

shuffle($myarray);
print_r($myarray);
/*o/p:
Array ( [0] => green [1] => blue [2] => yellow [3] => red )*/
?>
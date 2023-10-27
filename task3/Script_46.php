Script_46 Develop a PHP script to fill an array with a specific value using the array_fill() function.
<?php
echo"<br>";
$val = array_fill(1,5, 'php');
print_r($val);

/*o/p:
Array ( [1] => php [2] => php [3] => php [4] => php [5] => php )*/

?>
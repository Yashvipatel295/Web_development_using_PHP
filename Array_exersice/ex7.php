﻿7. Remove the last number from the array created in question 5.
<?php
echo "<br>";


$num=array(1,2,3,4,5,6,7,8,9);
print_r("total numbers in above array =" .count($num));
array_pop($num);
echo"<br/>";
echo"numbers inn the array after deleting the last one<br/>";
print_r ($num);

/*O/p:
total numbers in above array =9
numbers inn the array after deleting the last one
Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 )*/
?>

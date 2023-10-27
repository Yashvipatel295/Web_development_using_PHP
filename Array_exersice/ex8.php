8. Remove a specific number of your choice from the array and display the updated array.
<?php
echo "<br>";

$num=array(1,2,3,4,5,6,7,8,9);
print_r("total numbers in above array =" .count($num));
unset($num[2]);
echo"<br/>";
echo"numbers inn the array after deleting the 2 index<br/>";
print_r ($num);
/*o/p:
 total numbers in above array =9
numbers inn the array after deleting the 2 index
Array ( [0] => 1 [1] => 2 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 )*/
?>

Script_50 Write a PHP script to filter the elements of an array based on a specified condition using
the array_filter() function.
<?php
echo "<br>";
function test_odd($var)
  {
  return($var & 1);
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));

/*O/p:
Array ( [0] => 1 [1] => 3 [3] => 3 )
*/
?>
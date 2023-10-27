Script_47 Write a PHP script that applies a user-defined function to all elements of an array using
the array_map() function.
<?php
echo "<br>";
function myfun($v)
{
  return($v*$v);
}

$ary=array(1,2,3,4,5);
print_r(array_map("myfun",$ary));

/*o/p:
Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
*/
?>
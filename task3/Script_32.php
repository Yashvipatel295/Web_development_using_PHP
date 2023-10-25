Script_32 Write a PHP script to merge two arrays using the array_merge() function and display the
combined result.
<?php
echo "<br/>";
$ary1=array("abc","def");
$ary2=array("ghi","jkl");
print_r(array_merge($ary1,$ary2));

/*
o/p:
Array ( [0] => abc [1] => def [2] => ghi [3] => jkl )*/
?>
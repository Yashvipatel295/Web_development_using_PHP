Script_41 Write a PHP script that finds the intersection of two arrays using the array_intersect()
function.
<?php
echo"<br/>";
$a1 = array(2,20,17, 4, 6, 8, 10, 12);
$a2 = array(1, 2, 3, 4, 5, 6);

var_dump(array_intersect($a1, $a2));

/*
o/p:
array(3) { [0]=> int(2) [3]=> int(4) [4]=> int(6) }*/
?>
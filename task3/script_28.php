<?php
/*Script_28 Develop a PHP script that sorts an array of integers in ascending order using the sort() 
function.*/
$arr=array(9,3,6,7,8,2);
sort($arr);
$arrlength = count($arr);
for($x = 0; $x < $arrlength; $x++) {
  echo $arr[$x];
  echo "<br>";
}
/* o/p:
2
3
6
7
8
9*/
?>
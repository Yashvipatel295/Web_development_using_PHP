Script_53 Write a PHP script that removes duplicate values from an associative array using the
array_unique() function.
<?php
echo "<br>";
$a=array("sita","ram","shiv","parvati","sita");
print_r(array_unique($a));

/*o/p:
Array ( [0] => sita [1] => ram [2] => shiv [3] => parvati )*/

?>

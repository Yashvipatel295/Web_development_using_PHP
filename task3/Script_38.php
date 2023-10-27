Script_38 Write a PHP script to use the array_shift() function to remove an element from the
beginning of an array and the array_unshift() function to add elements at the beginning.
<?php
echo "<br/>";
$a = array(1, 2, 3, 4, 5);

$first_element = array_shift($a);

echo "Removed element: " . $first_element . PHP_EOL;
print_r($a);


$a = array(1, 2, 3, 4, 5);

$new_length = array_unshift($a, 0);

echo "</br>New length of array: " . $new_length . PHP_EOL;
print_r($a);

/*
o/p:
Removed element: 1 Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 )
New length of array: 6 Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )*/

?>
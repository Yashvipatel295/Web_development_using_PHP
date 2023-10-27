2. Add a new color to the array from question 1.
<?php
echo "<br>";
$color= array('black', 'white','blue','pink');
array_push($color,'green');
print_r($color);

/*o/p:
Array ( [0] => black [1] => white [2] => blue [3] => pink [4] => green )*/
?>

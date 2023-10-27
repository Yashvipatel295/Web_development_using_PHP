20. Reverse the order of the cities in the array from question 19.
<?php
echo "<br>";

$city=array('roha','jaipur','udapur','chennai');

echo"before rsorting<br/>";
print_r($city);
echo"<br/>";
rsort($city);
echo"after rsorting<br/>";
print_r($city);

/*o/p:
before rsorting
Array ( [0] => roha [1] => jaipur [2] => udapur [3] => chennai )
after rsorting
Array ( [0] => udapur [1] => roha [2] => jaipur [3] => chennai )
*/
?>

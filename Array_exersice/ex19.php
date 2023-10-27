19. Sort the cities in alphabetical order.
<?php
echo "<br>";
$city=array('roha','jaipur','udapur','chennai');

echo"before sorting<br/>";
print_r($city);
echo"<br/>";
sort($city);
echo"after sorting<br/>";
print_r($city);

/*o/p:
before sorting
Array ( [0] => roha [1] => jaipur [2] => udapur [3] => chennai )
after sorting
Array ( [0] => chennai [1] => jaipur [2] => roha [3] => udapur )
*/

?>

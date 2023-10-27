17. Add a new city to your travel list from question 16.
<?php
echo "<br>";

$city=array('roha','jaipur','udapur','chennai');
echo"before adding<br/>";
print_r($city);
echo"<br/>";
array_push($city,'paris');
echo"after adding<br/>";
print_r($city);

/*o/p:
before adding
Array ( [0] => roha [1] => jaipur [2] => udapur [3] => chennai )
after adding
Array ( [0] => roha [1] => jaipur [2] => udapur [3] => chennai [4] => paris )*/
?>

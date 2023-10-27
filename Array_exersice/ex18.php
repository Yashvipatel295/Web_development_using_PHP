18. Remove a city of your choice from the array and display the updated list.
<?php
echo "<br>";
$city=array('roha','jaipur','udapur','chennai');
echo"before deleting<br/>";
print_r($city);
echo"<br/>";
unset($city[2]);
echo"after deleting<br/>";
print_r($city);

/*o/p:
before deleting
Array ( [0] => roha [1] => jaipur [2] => udapur [3] => chennai )
after deleting
Array ( [0] => roha [1] => jaipur [3] => chennai )*/
?>

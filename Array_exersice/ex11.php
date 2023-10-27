11. Create two arrays, one with fruits and another with vegetables. Merge them into a single array.
<?php
echo "<br>";

$fruit=array('Mango','apple');
print_r($fruit);
echo"<br/>";
$veg=array('potato','tomatos');
print_r($veg);
echo"<br/>";
echo"mergging both array ";
print_r(array_merge($fruit,$veg));

/*o/p:
Merge them into a single array. Array ( [0] => Mango [1] => apple )
Array ( [0] => potato [1] => tomatos )
mergging both array Array ( [0] => Mango [1] => apple [2] => potato [3] => tomatos )
*/
?>

Script_54 Create a PHP script that extracts a specific column from a multidimensional array using
the array_column() function.
<?php
echo "<br>";
// Array representing a possible record set returned from a database
$rcd = array(array('id' => 25,'first_name' => 'ram','last_name' => 'suryvanshi',),
    array('id' => 35,'first_name' => 'krishn','last_name' => 'yaduvanshi',),
    array('id' => 52,'first_name' => 'parshuram','last_name' => 'brahmin',),
    array('id' => 53,'first_name' => 'narshinh','last_name' => 'mehta',)
);
 
$first_names = array_column($rcd, 'first_name');
print_r($first_names);

/*
O/p:
Array ( [0] => ram [1] => krishn [2] => parshuram [3] => narshinh )*/
?>
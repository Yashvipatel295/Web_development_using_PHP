Script_55 Develop a PHP script that uses the array_key_first() and array_key_last() functions to
retrieve the first and last keys of an array.
<?php
echo "<br>";
$ary = ['book' => 'ramayan', 'language' => 'sanskrit', 'writer' => 'valmiki'];

$first_Key = array_key_first($ary);

print_r($first_Key);

$last_key=array_key_last($ary);

echo"</br>";
print_r($last_key);

/*
o/p:
book
writer*/

?>
Script_48 Create a PHP script that uses the array_reduce() function to apply a callback function to
the elements of an array and return a single value.
<?php
echo"<br>";
function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("red","black","blue");
print_r(array_reduce($a,"myfunction"));

/*OUTPUT:
-red-black-blue
*/
?>
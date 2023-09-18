<?php
/*Write a PHP script to swap the values of two variables $x and $y using a temporary
variable. Display the swapped values using the echo statement.*/

  
$x = 45;  
$y = 78;  
echo "before swapping: x=$x y=$y<br><br>";
// Swapping Logic  
$z = $x;  
$x = $y;  
$y = $z;  
echo "After swapping:x=$x y=$y";  
/* o/p:
before swapping: x=45 y=78

After swapping:x=78 y=45 */
?>
<?php
/*6. Develop a PHP program that assigns an initial value to the variable $x, then reassigns it to a new
value, and finally echoes the value.*/
$x=10;
echo "Value of x before reassignment : $x \n";
$y=12;
echo "Value of y : $y \n";
$x=$y;
echo "Value of x after reassignment : $x";

/*o/p:
Value of x before reassignment : 10 Value of y : 12 Value of x after reassignment : 12 */
?>
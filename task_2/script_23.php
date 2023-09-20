<?php
/*Script to determine the largest among three numbers and display the result.*/
$x=90;
$y=100;
$z=30;
echo "x=$x y=$y z=$z <br/>";
if($x>$y)
{
	if($x>$z)
	{
		echo "x is large";
	}
}
elseif($y>$z)
{
	echo "y is large";
}
else
{
	echo "z is large";
}
/* o/p: x=90 y=100 z=30
y is large*/
?>
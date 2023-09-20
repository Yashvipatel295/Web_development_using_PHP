<?php
/* Create a PHP script to check if a given year is a leap year and display the result.*/
$year=2023;
if((($year%4==0) && ($year%100!=0)) || ($year%400==0))
{
	echo "$year is leap year";
}
else
{
	echo "$year is not a leap year";
}
/* o/p:
2023 is not a leap year */
?>
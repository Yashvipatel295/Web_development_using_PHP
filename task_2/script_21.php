<?php
/* Script to check if a given number is a palindrome or not and display the result.*/
function Palindrome($string){
	if (strrev($string) == $string){
		return 1;
	}
	else{
		return 0;
	}
}

$original = "sis";
if(Palindrome($original)){
	echo "Palindrome";
}
else {
echo "Not a Palindrome";
}
/* o/p:
Palindrome*/
?>
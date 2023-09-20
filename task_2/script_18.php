<?php
/* Write a PHP script that generates a random number between 1 and 10 and lets the user
guess it.*/
$num1 = rand();
  
echo "Random number: " . $num1 . "\n";
  
$num2 = rand(1, 10);
    
echo "Random number in range (1, 10): ", $num2;

/* o/p: Random number: 1343275587 Random number in range (1, 10): 9 */
?>
6. Use a loop to display each number in the array from question 5.
<?php
echo "<br>";

$num=array(1,2,3,4,5,6,7,8,9);
print_r("total numbers in above array =" .count($num));
echo "</br>";
echo "those numbers are :-";
foreach( $num as $numm)
{
    echo "</br>";
    echo ($numm);
    echo "</br>";
}

    /* o/p:
    those numbers are :-
1

2

3

4

5

6

7

8

9
    */
?>

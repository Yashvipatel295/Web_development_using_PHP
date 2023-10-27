10. Sort the array from question 9 in reverse alphabetical order.
<?php
echo "<br>";
$alpha=array('M','Y','N','B','P');
echo"before rsort<br/>";
print_r($alpha);
echo"<br/>";
rsort($alpha);
echo"after rsorting<br/>";
print_r($alpha);

/*O/p:
before rsort
Array ( [0] => M [1] => Y [2] => N [3] => B [4] => P )
after rsorting
Array ( [0] => Y [1] => P [2] => N [3] => M [4] => B )
*/
?>

9. Sort an array of words in alphabetical order.
<?php
echo "<br>";
$alpha=array('M','Y','N','B','P');
echo"before sort<br/>";
print_r($alpha);
echo"<br/>";
sort($alpha);
echo"after sorting<br/>";
print_r($alpha);

/*o/p:
before sort
Array ( [0] => M [1] => Y [2] => N [3] => B [4] => P )
after sorting
Array ( [0] => B [1] => M [2] => N [3] => P [4] => Y )
*/
?>

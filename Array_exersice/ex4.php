4. Check if the color "Green" exists in the array from question 1.
<?php
echo "<br>";

$color= array('black', 'white','blue','pink');

if (in_array("cream", $color))
  {
  echo "color founded";
  }
else
  {
  echo "there is no color that mentioned above";
  }

    /*o/p:
   there is no color that mentioned above*/
?>

Script_34 Develop a PHP script to check if a specific value exists in an array using the in_array()
function.
<?php
echo "<br/>";
$chocolate = array("kitkat", "fruit&nut", "silk", "munch");

if (in_array("munch", $chocolate))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }

  /*O/p:
  Match found*/
?>
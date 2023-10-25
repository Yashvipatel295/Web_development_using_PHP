Script_33 Create a PHP script to check if a specific key exists in an associative array using the
array_key_exists() function.
<?php
echo "<br/>";
$a=array("abc"=>"xyz","def"=>"uvw");
if (array_key_exists("abc",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }

  /*O/p:
  Key exists!*/
?>
Script_31 Develop a PHP script that searches for a specific element in an array using the
array_search() function and displays the index if found.
<?php
echo "<br/>";
$a=array("a"=>"Disha","b"=>"Yashvi","c"=>"Jenny");
echo array_search("Yashvi",$a);
/*O/p:
b
*/
?>
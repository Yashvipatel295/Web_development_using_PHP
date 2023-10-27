Script_39 Create a PHP script that extracts a portion of an array using the array_slice() function
and displays the result.
<?php  
echo "<br>";
$stud=array("Disha","bansri","Yashvi","Jenny","riya","Drashti","nandani");  
print_r(array_slice($stud,1,2)); 
/*o/p:
Array ( [0] => bansri [1] => Yashvi )*/ 
?>  
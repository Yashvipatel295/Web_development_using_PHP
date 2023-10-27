
14. Remove the email element from the associative array and display the updated array.
<?php
echo "<br>";
$info=array("name"=>'Yashvi',"age"=>21,"email"=>'Yashvi@gmail.com');
echo"before deleting the email<br/>";
print_r($info);
echo"<br/>after deleting<br/>";
array_pop($info);
print_r($info);

/*o/p:
before deleting the email
Array ( [name] => Yashvi [age] => 21 [email] => Yashvi@gmail.com )
after deleting
Array ( [name] => Yashvi [age] => 21 )*/
?>

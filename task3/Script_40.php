Script_40 Develop a PHP script to remove and replace elements from an array using the
array_splice() function.
<?php
echo"<br>";
$ary1=array("a"=>"rose","b"=>"lotus","c"=>"sunflower","d"=>"Jasmine");
$ary2=array("a"=>"daisy","b"=>"lily");
array_splice($ary1,0,2,$ary2);
print_r($ary1);

/*o/p:
Array ( [0] => daisy [1] => lily [c] => sunflower [d] => Jasmine )*/

?>
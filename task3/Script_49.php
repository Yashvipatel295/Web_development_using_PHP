Script_49 Develop a PHP script to split an array into chunks of a specified size using the
array_chunk() function.
<?php
echo "<br>";
$function=array("jal","sagai","mehndi","haldi","dandiya","marraige");
print_r(array_chunk($function,2));

/*\
output:
Array ( [0] => Array ( [0] => jal [1] => sagai ) [1] => Array ( [0] => mehndi [1] => haldi ) [2] => Array ( [0] => dandiya [1] => marraige ) )
*/
?>
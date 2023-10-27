
15. Create a multidimensional array to store information about movies, including title, director, and
release year for at least two movies. Display the information for one of the movies.
<?php
echo "<br>";
$movies=array(
    array("title"=>'3 idiots',"director"=>'rajkumar hirani',"release_year"=>2009),
    array("title"=>'shidat',"director"=>'kunal deshmukh',"release_year"=>2021),
);
print_r($movies[1]);

/*o/p:
Array ( [title] => shidat [director] => kunal deshmukh [release_year] => 2021 )*/
?>

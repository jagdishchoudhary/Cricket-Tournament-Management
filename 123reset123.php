<?php 
$dns="mysql:host=sql307.epizy.com;dbname=epiz_29301892_cricket";
$username="epiz_29301892";
$password="itoGnKNCI3w";
 $db= new PDO($dns, $username, $password);
//points table reset
$query="DELETE FROM points_table WHERE 1;";
  $statement=$db->prepare($query);
  //Execute
  $statement->execute();

$query="DELETE FROM Matches WHERE 1;";
  $statement=$db->prepare($query);
  //Execute
  $statement->execute();

?>
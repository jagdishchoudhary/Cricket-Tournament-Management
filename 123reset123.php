<?php 

//connect your database


//Coonection done

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

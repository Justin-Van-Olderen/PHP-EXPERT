<?php

include "database.php";

$uid = ($_GET['ID']);


$sql = "DELETE FROM superheroes WHERE ID = :ph_id";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_id", $uid );
header("location:superheroes_index.php"); 
$stmt->execute()

?>
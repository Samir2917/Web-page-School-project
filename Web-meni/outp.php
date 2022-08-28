<?php 
$connection = mysqli_connect('localhost', 'root', '', 'pekar');

$query = "SELECT * FROM recenzije";
$result = $connection->query($query);


mysqli_query($connection, $query);
?>
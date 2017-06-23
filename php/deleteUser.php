<?php

include('connection.php');

$data = file_get_contents("php://input");
$jsonData = json_decode($data);
$id = $jsonData->id;

$sql = "DELETE FROM accounts WHERE id = $id LIMIT 1";
$query = mysqli_query($db,$sql);

mysqli_close($db);

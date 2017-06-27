<?php

include('connection.php');
$data = file_get_contents("php://input");
$jsonData = json_decode($data);
$name = $jsonData->name;
$deposit = $jsonData->deposit;
$card = $jsonData->card;


$sql = "INSERT INTO `accounts`(`id`, `name`, `deposit`, `card`) VALUES (NULL,'$name','$deposit','$card')";

$query = mysqli_query($db,$sql);

mysqli_close($db);

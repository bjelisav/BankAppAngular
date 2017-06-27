<?php

include('connection.php');
$data = file_get_contents("php://input");
$jsonData = json_decode($data);
$id = $jsonData->id;
$name = $jsonData->name;
$deposit = $jsonData->deposit;
$card = $jsonData->card;

$sql = "UPDATE `accounts` SET `name`='$name',`deposit`='$deposit',`card`='$card' WHERE `id`=$id";
$query = mysqli_query($db,$sql);

mysqli_close($db);

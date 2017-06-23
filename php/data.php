<?php

include('connection.php');
$sql = "SELECT * FROM accounts";
$query = mysqli_query($db,$sql);

$arr = array();

while($row=mysqli_fetch_assoc($query)){
  $id = $row['id'];
  $name = $row['name'];
  $deposit = $row['deposit'];
  $card = $row['card'];
  $arr[] = ['id'=>$id,'name'=>$name,'deposit'=>$deposit,'card'=>$card];
}

$jsonFromat= json_encode($arr);
echo $jsonFromat;

<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include 'connection.php';

$sql = "SELECT * FROM contact";
$result = mysqli_query($con, $sql);

$data = [];

while($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

echo json_encode($data);
?>
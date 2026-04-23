<?php
header("Access-Control-Allow-Origin: *");
include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";

if(mysqli_query($con, $sql)){
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error"]);
}
?>
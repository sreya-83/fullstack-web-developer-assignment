<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include 'connection.php';

$name = $_POST['name'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($name) || empty($username) || empty($password)) {
    echo json_encode(["status" => "error", "message" => "All fields required"]);
    exit();
}

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO register(name,username,password)VALUES('$name','$username','$hashedPassword')";

if (mysqli_query($con, $sql)) {
    echo json_encode(["status" => "success", "message" => "Registered successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Error occurred"]);
}
?>
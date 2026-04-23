<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include 'connection.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($username) || empty($password)) {
    echo json_encode(["status" => "error", "message" => "All fields required"]);
    exit();
}

$sql = "SELECT * FROM register WHERE username='$username'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) == 0) {

    echo json_encode(["status" => "error", "message" => "User not found"]);
    exit();

} else {

    $user = mysqli_fetch_assoc($result);

    if (password_verify($password, $user['password'])) {

        echo json_encode([
            "status" => "success",
            "username" => $user['username']
        ]);

    } else {

        echo json_encode(["status" => "error", "message" => "Wrong password"]);
    }
}
?>
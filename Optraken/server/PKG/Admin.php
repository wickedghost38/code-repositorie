<?php
if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    http_response_code(403);
    exit();
}
 
session_start();
 
include_once __DIR__ . "/db.php";
$username = $_POST["username"];
$password = $_POST["password"];
$stmt = $pdo->prepare("SELECT * FROM user WHERE username = :username");
$stmt->execute(["username" => $username]);
 
$user = $stmt->fetch();
if ($user && password_verify($password, $user["password"])) {
    $_SESSION["user_id"] = $user["user_id"];
    $_SESSION["username"] = $user["username"];
    header("Location: /");
} else {
    http_response_code(403);
    echo "Invalid username or password.";
    die();
}
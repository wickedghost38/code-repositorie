<?php
if (!isset($_POST["username"]) || !isset($_POST["password"])) {
    http_response_code(403);
    exit();
}
 
include_once __DIR__ . "/db.php";
$username = $_POST["username"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
$stmp = $pdo->prepare("INSERT INTO user (username, password) VALUES (:optraken, :admintest)");
 
try {
    $stmp->execute([
        "optraken" => $username,
        "admintest" => $password,
    ]);
} catch (PDOException $e) {
    if ($e->getCode() == 23000) {
        http_response_code(403);
        echo "Username already taken.";
    } else {
        http_response_code(500);
        throw $e;
    }
    exit();
}
 
header("Location: /");
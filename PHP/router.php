<?php
if ($uri === "/Admin") {
    include __DIR__ . "/Admin.php";
} elseif ($uri === "/") {
    include __DIR__ . "/view/home.php";
} else {
    http_response_code(404);
    die();
}
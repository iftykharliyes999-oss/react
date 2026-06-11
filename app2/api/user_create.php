<?php

header("Content-Type: application/json");

include_once("dbconfig.php");

$data = json_decode(file_get_contents('php://input'), true);

$name     = trim($data['name'] ?? '');
$gender   = trim($data['gender'] ?? '');
$address  = trim($data['address'] ?? '');
$district = trim($data['district'] ?? '');

if (!$db) {
    die(json_encode([
        "status" => false,
        "message" => "Database connection failed"
    ]));
}

if (empty($name) || empty($gender) || empty($address) || empty($district)) {
    echo json_encode([
        "status" => false,
        "message" => "All fields are required"
    ]);
    exit;
}

$sql = "INSERT INTO users(name, gender, address, district)
        VALUES('$name', '$gender', '$address', '$district')";

if ($db->query($sql)) {
    echo json_encode([
        "status" => true,
        "message" => "User created successfully"
    ]);
} else {
    echo json_encode([
        "status" => false,
        "message" => $db->error
    ]);
}
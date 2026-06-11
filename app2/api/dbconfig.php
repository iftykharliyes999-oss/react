<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

$host = "localhost";
$dbname = "react_crud";
$user = "root";
$pass = "";

$db = new mysqli($host, $user, $pass, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
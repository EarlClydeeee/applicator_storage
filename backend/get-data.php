<?php
// Allow CORS so Next.js can access
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "storage_system"; // Updated to match your SQL file

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

// Query applicators data
$sql = "SELECT id, name, type, output_count, created_at FROM applicators";
$result = $conn->query($sql);

if (!$result) {
    die(json_encode(["error" => "Query failed: " . $conn->error]));
}

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
$conn->close();
?>

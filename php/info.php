<?php
$secret = 'supersecretAA!@@A$';
$conn = new mysqli("db", "labuser", "labpass", "testdb");
if ($conn->connect_error) {
    die("DB Error");
}

$data = $_GET["data"] ?? "";
$hash = $_GET["hash"] ?? "";

if (md5($secret . $data) !== $hash) {
    http_response_code(403);
    die("Invalid hash");
}

$result = $conn->query("SELECT * FROM users WHERE $data");
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " | Name: " . $row["name"] . " | Admin: " . $row["admin"] . "<br>";
    }
} else {
    echo "No results";
}

$conn->close();

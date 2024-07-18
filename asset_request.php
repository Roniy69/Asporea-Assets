<?php
include 'db.php';

// Retrieve form data using $_POST
$asset_name = $_POST['asset_name'];
$asset_type = $_POST['asset_type'];
$department = $_POST['department'];
$requester_name = $_POST['requester_name'];

// SQL query to insert data into 'asset_requests' table
$sql = "INSERT INTO asset_requests (asset_name, asset_type, department, requester_name)
        VALUES ('$asset_name', '$asset_type', '$department', '$requester_name')";

if ($conn->query($sql) === TRUE) {
    echo "Asset request submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

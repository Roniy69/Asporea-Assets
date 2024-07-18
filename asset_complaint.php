<?php
include 'db.php';

// Retrieve form data using $_POST
$asset_id = $_POST['asset_id'];
$complaint_details = $_POST['complaint_details'];

// SQL query to insert data into 'asset_complaints' table
$sql = "INSERT INTO asset_complaints (asset_id, complaint_details)
        VALUES ('$asset_id', '$complaint_details')";

if ($conn->query($sql) === TRUE) {
    echo "Complaint submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

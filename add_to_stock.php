<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $asset_name = $_POST['asset_name'];
    $asset_type = $_POST['asset_type'];
    $serial_number = $_POST['serial_number'];

    $sql = "INSERT INTO assets (asset_name, asset_type, serial_number, status)
            VALUES ('$asset_name', '$asset_type', '$serial_number', 'In Stock')";

    if ($conn->query($sql) === TRUE) {
        echo "Asset added to stock successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

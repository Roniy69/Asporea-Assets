<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $asset_name = $_POST['asset_name'];
    $repair_details = $_POST['repair_details'];

    $sql = "INSERT INTO repair_items (asset_name, repair_details) 
            VALUES ('$asset_name', '$repair_details')";

    if ($conn->query($sql) === TRUE) {
        echo "New item added to repair list successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item to Repair</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Add Item to Repair</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="asset_name">Asset Name:</label>
                <input type="text" class="form-control" id="asset_name" name="asset_name" required>
            </div>
            <div class="form-group">
                <label for="repair_details">Repair Details:</label>
                <textarea class="form-control" id="repair_details" name="repair_details" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Item</button>
        </form>
    </div>
</body>
</html>

<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $asset_name = $_POST['asset_name'];
    $repair_details = $_POST['repair_details'];
    $status = $_POST['status'];

    $sql = "INSERT INTO repair_items (asset_name, repair_details, status) VALUES ('$asset_name', '$repair_details', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "New repair item added successfully";
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
    <title>Add Items in Repair</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Add Items in Repair</h2>
        <form action="add_items_in_repair.php" method="post">
            <div class="form-group">
                <label for="asset_name">Asset Name:</label>
                <input type="text" class="form-control" id="asset_name" name="asset_name" required>
            </div>
            <div class="form-group">
                <label for="repair_details">Repair Details:</label>
                <input type="text" class="form-control" id="repair_details" name="repair_details" required>
            </div>
            <div class
="form-group">
<label for="status">Status:</label>
<input type="text" class="form-control" id="status" name="status" required>
</div>
<button type="submit" class="btn btn-primary">Add Repair Item</button>
</form>
</div>

</body>
</html>
<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $asset_name = $_POST['asset_name'];
    $asset_type = $_POST['asset_type'];
    $department = $_POST['department'];
    $requester_name = $_POST['requester_name'];

    $sql = "INSERT INTO asset_requisitions (asset_name, asset_type, department, requester_name) 
            VALUES ('$asset_name', '$asset_type', '$department', '$requester_name')";

    if ($conn->query($sql) === TRUE) {
        echo "New asset request submitted successfully";
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
    <title>Asset Request Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Asset Request Form</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="asset_name">Asset Name:</label>
                <input type="text" class="form-control" id="asset_name" name="asset_name" required>
            </div>
            <div class="form-group">
                <label for="asset_type">Asset Type:</label>
                <input type="text" class="form-control" id="asset_type" name="asset_type" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <div class="form-group">
                <label for="requester_name">Requester Name:</label>
                <input type="text" class="form-control" id="requester_name" name="requester_name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit Request</button>
        </form>
    </div>
</body>
</html>

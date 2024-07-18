<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $asset_name = $_POST['asset_name'];
    $asset_type = $_POST['asset_type'];
    $branch = $_POST['branch'];
    $company = $_POST['company'];
    $brand = $_POST['brand'];
    $serial_number = $_POST['serial_number'];

    $sql = "INSERT INTO assets (asset_name, asset_type, branch, company, brand, serial_number) 
            VALUES ('$asset_name', '$asset_type', '$branch', '$company', '$brand', '$serial_number')";

    if ($conn->query($sql) === TRUE) {
        echo "New asset added successfully";
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
    <title>Add Asset</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Add Asset</h2>
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
                <label for="branch">Branch:</label>
                <input type="text" class="form-control" id="branch" name="branch" required>
            </div>
            <div class="form-group">
                <label for="company">Company:</label>
                <input type="text" class="form-control" id="company" name="company" required>
            </div>
            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" name="brand" required>
            </div>
            <div class="form-group">
                <label for="serial_number">Serial Number:</label>
                <input type="text" class="form-control" id="serial_number" name="serial_number" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Asset</button>
        </form>
    </div>
</body>
</html>

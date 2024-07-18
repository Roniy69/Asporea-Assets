<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Asset to Repair</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add Asset to Repair</h2>
        <form action="../add_to_repair.php" method="POST">
            <div class="form-group">
                <label for="asset_name">Asset Name:</label>
                <input type="text" class="form-control" id="asset_name" name="asset_name" required>
            </div>
            <div class="form-group">
                <label for="asset_type">Asset Type:</label>
                <input type="text" class="form-control" id="asset_type" name="asset_type" required>
            </div>
            <div class="form-group">
                <label for="serial_number">Serial Number:</label>
                <input type="text" class="form-control" id="serial_number" name="serial_number" required>
            </div>
            <button type="submit" class="btn btn-primary">Add to Repair</button>
        </form>
    </div>
</body>
</html>

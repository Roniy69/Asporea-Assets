<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Asset</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add New Asset</h2>
        <form action="../add_asset.php" method="POST">
            <div class="form-group">
                <label for="asset_name">Asset Name</label>
                <input type="text" class="form-control" id="asset_name" name="asset_name" required>
            </div>
            <div class="form-group">
                <label for="asset_type">Asset Type</label>
                <input type="text" class="form-control" id="asset_type" name="asset_type" required>
            </div>
            <div class="form-group">
                <label for="branch">Branch</label>
                <input type="text" class="form-control" id="branch" name="branch" required>
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" id="company" name="company" required>
            </div>
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" id="brand" name="brand" required>
            </div>
            <div class="form-group">
                <label for="serial_number">Serial Number</label>
                <input type="text" class="form-control" id="serial_number" name="serial_number" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Asset</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

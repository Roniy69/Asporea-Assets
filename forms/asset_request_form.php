<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset Request</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Asset Request Form</h2>
        <form action="../asset_request.php" method="POST">
            <div class="form-group">
                <label for="asset_name">Asset Name</label>
                <input type="text" class="form-control" id="asset_name" name="asset_name" required>
            </div>
            <div class="form-group">
                <label for="asset_type">Asset Type</label>
                <input type="text" class="form-control" id="asset_type" name="asset_type" required>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <div class="form-group">
                <label for="requester_name">Requester Name</label>
                <input type="text" class="form-control" id="requester_name" name="requester_name" required>
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit Request</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

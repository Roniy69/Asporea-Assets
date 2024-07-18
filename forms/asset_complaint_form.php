<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset Complaint</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Asset Complaint Form</h2>
        <form action="../asset_complaint.php" method="POST">
            <div class="form-group">
                <label for="asset_id">Asset ID</label>
                <input type="number" class="form-control" id="asset_id" name="asset_id" required>
            </div>
            <div class="form-group">
                <label for="complaint_details">Complaint Details</label>
                <textarea class="form-control" id="complaint_details" name="complaint_details" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-danger"><i class="fas fa-paper-plane"></i> Submit Complaint</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

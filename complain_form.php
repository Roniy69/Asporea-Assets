<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = $_POST['company'];
    $department = $_POST['department'];
    $name = $_POST['name'];
    $complaint_details = $_POST['complaint_details'];

    $sql = "INSERT INTO complaints (company, department, name, complaint_details) 
            VALUES ('$company', '$department', '$name', '$complaint_details')";

    if ($conn->query($sql) === TRUE) {
        echo "New complaint submitted successfully";
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
    <title>Complaint Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Submit a Complaint</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="company">Company:</label>
                <input type="text" class="form-control" id="company" name="company" required>
            </div>
            <div class="form-group">
                <label for="department">Department:</label>
                <input type="text" class="form-control" id="department" name="department" required>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="complaint_details">Complaint Details:</label>
                <textarea class="form-control" id="complaint_details" name="complaint_details" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Complaint</button>
        </form>
    </div>
</body>
</html>

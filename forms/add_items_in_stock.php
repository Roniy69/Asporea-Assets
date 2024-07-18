<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $location = $_POST['location'];

    $sql = "INSERT INTO stock_items (item_name, quantity, location) VALUES ('$item_name', '$quantity', '$location')";

    if ($conn->query($sql) === TRUE) {
        echo "New item added successfully";
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
    <title>Add Items in Stock</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Add Items in Stock</h2>
        <form action="add_items_in_stock.php" method="post">
            <div class="form-group">
                <label for="item_name">Item Name:</label>
                <input type="text" class="form-control" id="item_name" name="item_name" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Item</button>
        </form>
    </div>
</body>
</html>

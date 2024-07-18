<?php
include 'db.php';

$sql = "SELECT * FROM stock_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container'>";
    echo "<h2>Items in Stock</h2>";
    echo "<table class='table table-bordered'>
            <thead class='thead-light'>
                <tr>
                    <th>ID</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["item_name"] . "</td>
                <td>" . $row["quantity"] . "</td>
                <td>" . $row["location"] . "</td>
              </tr>";
    }
    echo "</tbody></table></div>";
} else {
    echo "<div class='container'><p>No items in stock.</p></div>";
}

$conn->close();
?>

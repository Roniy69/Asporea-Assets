<?php
include 'db.php';

$sql = "SELECT * FROM repair_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container'>";
    echo "<h2>Items in Repair</h2>";
    echo "<table class='table table-bordered'>
            <thead class='thead-light'>
                <tr>
                    <th>ID</th>
                    <th>Asset Name</th>
                    <th>Repair Details</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["asset_name"] . "</td>
                <td>" . $row["repair_details"] . "</td>
                <td>" . $row["status"] . "</td>
              </tr>";
    }
    echo "</tbody></table></div>";
} else {
    echo "<div class='container'><p>No items in repair.</p></div>";
}

$conn->close();
?>

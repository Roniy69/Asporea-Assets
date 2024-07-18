<?php
include 'db.php';

$sql = "SELECT * FROM assets";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container'>";
    echo "<h2>Asset List</h2>";
    echo "<table class='table table-bordered'>
            <thead class='thead-light'>
                <tr>
                    <th>ID</th>
                    <th>Asset Name</th>
                    <th>Asset Type</th>
                    <th>Branch</th>
                    <th>Company</th>
                    <th>Brand</th>
                    <th>Serial Number</th>
                </tr>
            </thead>
            <tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["asset_name"] . "</td>
                <td>" . $row["asset_type"] . "</td>
                <td>" . $row["branch"] . "</td>
                <td>" . $row["company"] . "</td>
                <td>" . $row["brand"] . "</td>
                <td>" . $row["serial_number"] . "</td>
              </tr>";
    }
    echo "</tbody></table></div>";
} else {
    echo "<div class='container'><p>No assets found.</p></div>";
}

$conn->close();
?>

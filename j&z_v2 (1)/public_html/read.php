<?php
$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['item']}</td>";
        echo "<td>{$row['beginning']}</td>";
        echo "<td>{$row['delivery']}</td>";
        echo "<td>{$row['ending']}</td>";
        echo "<td>{$row['unit_price']}</td>";
        echo "<td>{$row['remarks']}</td>";
        echo "<td>
                <a href='edit.php?id={$row['id']}'>Edit</a> |
                <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>No records found</td></tr>";
}

$conn->close();
?>

<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM inventory WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found";
        exit();
    }
} else {
    echo "Invalid request";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="create.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <form method="post" action="edit_process.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <!-- Add form fields here based on your inventory fields -->
        <label for="item">Item:</label>
        <input type="text" name="item" value="<?php echo $row['item']; ?>" required>

        <label for="beginning">Beginning:</label>
        <input type="number" name="beginning" value="<?php echo $row['beginning']; ?>" required>

        <label for="delivery">Delivery:</label>
        <input type="number" name="delivery" value="<?php echo $row['delivery']; ?>" required>

        <label for="ending">Ending:</label>
        <input type="number" name="ending" value="<?php echo $row['ending']; ?>" required>

        <label for="unit_price">Unit Price:</label>
        <input type="number" name="unit_price" step="0.01" value="<?php echo $row['unit_price']; ?>" required>

        <label for="remarks">Remarks:</label>
        <input type="text" name="remarks" value="<?php echo $row['remarks']; ?>">

        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>

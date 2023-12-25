<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <form method="post" action="create_process.php">
        <!-- Add form fields here based on your inventory fields -->
        <label for="item">Item:</label>
        <input type="text" name="item" required>

        <label for="beginning">Beginning:</label>
        <input type="number" name="beginning" required>

        <label for="delivery">Delivery:</label>
        <input type="number" name="delivery" required>

        <label for="ending">Ending:</label>
        <input type="number" name="ending" required>

        <label for="unit_price">Unit Price:</label>
        <input type="number" name="unit_price" step="0.01" required>

        <label for="remarks">Remarks:</label>
        <input type="text" name="remarks">

        <button type="submit">Create</button>
    </form>
</div>

</body>
</html>

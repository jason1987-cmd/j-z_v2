<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="body.css">
</head>




<body>
<?php include 'header.php'; ?>
<?php include 'config.php'; ?>

<br>
<div class="container">

    <div class="actions">
        <button onclick="location.href='create.php'">Create</button>
    </div>
	
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Item</th>
            <th>Beginning</th>
            <th>Delivery</th>
            <th>Ending</th>
            <th>Unit Price</th>
            <th>Remarks</th>
            <th>Actions</th>
        </tr>

        <?php include 'read.php'; ?>

    </table>

</div>

</body>
</html>

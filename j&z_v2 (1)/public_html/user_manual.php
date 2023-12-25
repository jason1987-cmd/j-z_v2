<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J&Z Inventory System User Manual</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: beige;
            color: #333;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: lightbeige;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            color: #555;
        }

        .section {
            margin-bottom: 20px;
        }

        a {
            color: #0066cc;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
    <h1>J&Z Inventory System User Manual</h1>

    <div class="section">
        <h2>1. Introduction</h2>
        <p>Welcome to the J&Z Inventory System! This system provides a robust platform for managing our inventory seamlessly. Enjoy the convenience of tracking and updating our items efficiently with our user-friendly interface.</p>
    </div>

    <div class="section">
        <h2>2. Getting Started</h2>
        <h3>2.1 Accessing the J&Z Inventory System</h3>
        <p>1. Open your preferred web browser (e.g., Google Chrome, Mozilla Firefox).</p>
        <p>2. Enter the following URL or click it to access the J&Z Inventory System: <a href="https://jzmilkteahouses.000webhostapp.com/index.php" target="_blank">https://jzmilkteahouses.000webhostapp.com/index.php</a>.</p>
    </div>

    <div class="section">
        <h2>3. Viewing Inventory</h2>
        <p>The homepage displays a comprehensive table featuring essential details about our inventory:</p>
        <ul>
            <li><strong>ID:</strong> Unique identifier for each item.</li>
            <li><strong>Item Name:</strong> The name of the inventory item.</li>
            <li><strong>Beginning Quantity:</strong> Initial quantity of the item.</li>
            <li><strong>Delivery Quantity:</strong> Quantity received through deliveries.</li>
            <li><strong>Ending Quantity:</strong> Current quantity after considering deliveries.</li>
            <li><strong>Unit Price:</strong> The cost per unit of the item.</li>
            <li><strong>Remarks:</strong> Additional notes or details about the item.</li>
            <li><strong>Actions:</strong> Options to edit or delete each item.</li>
        </ul>
    </div>

    <div class="section">
        <h2>4. Creating New Items</h2>
        <p>1. From the homepage, click the "Create" button located on the right side.</p>
        <p>2. You will be directed to the "Create Item" page.</p>
        <p>3. Provide the necessary details:</p>
        <ul>
            <li><strong>Item Name:</strong> Enter the name of the new item.</li>
            <li><strong>Beginning Quantity:</strong> Initial quantity on hand.</li>
            <li><strong>Delivery Quantity:</strong> Quantity received through deliveries.</li>
            <li><strong>Ending Quantity:</strong> System will calculate this based on the inputs.</li>
            <li><strong>Unit Price:</strong> Cost per unit of the item.</li>
            <li><strong>Remarks:</strong> Add any relevant notes.</li>
        </ul>
        <p>4. Click the "Create" button to add the new item to our inventory.</p>
    </div>

    <div class="section">
        <h2>5. Editing Existing Items</h2>
        <p>1. Locate the item you want to edit on the homepage.</p>
        <p>2. Click the "Edit" link in the "Actions" column for the corresponding item.</p>
        <p>3. You will be redirected to the "Edit Item" page.</p>
        <p>4. Make necessary modifications.</p>
        <p>5. Click the "Update" button to save changes.</p>
    </div>

    <div class="section">
        <h2>6. Deleting Items</h2>
        <p>1. Identify the item you wish to remove from the inventory on the homepage.</p>
        <p>2. Click the "Delete" link in the "Actions" column for the relevant item.</p>
        <p>3. Confirm the deletion when prompted.</p>
    </div>

    <div class="section">
        <h2>7. Security Measures</h2>
        <ul>
            <li><strong>Login Credentials:</strong> Keep your login credentials confidential. Do not share them.</li>
            <li><strong>Secure Connection:</strong> Ensure you are accessing the system through a secure connection (HTTPS).</li>
            <li><strong>Regular Backups:</strong> Periodically back up your database to prevent data loss.</li>
        </ul>
    </div>

    <div class="section">
        <h2>8. Troubleshooting</h2>
        <ul>
            <li>Check your internet connection for stability.</li>
            <li>Clear browser cache and cookies if experiencing unexpected behavior.</li>
            <li>Verify system requirements and browser compatibility.</li>
        </ul>
    </div>

    <div class="section">
        <h2>9. Contact Support</h2>
        <p>If you encounter persistent issues or have specific questions, please contact our support team at <a href="mailto:support@j&z-inventory.com">support@j&z-inventory.com</a>.</p>
    </div>
</div>

</body>
</html>

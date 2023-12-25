<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = $_POST['item'];
    $beginning = $_POST['beginning'];
    $delivery = $_POST['delivery'];
    $ending = $_POST['ending'];
    $unit_price = $_POST['unit_price'];
    $remarks = $_POST['remarks'];

    $sql = "INSERT INTO inventory (item, beginning, delivery, ending, unit_price, remarks) 
            VALUES ('$item', $beginning, $delivery, $ending, $unit_price, '$remarks')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

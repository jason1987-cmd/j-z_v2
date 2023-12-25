<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $item = $_POST['item'];
    $beginning = $_POST['beginning'];
    $delivery = $_POST['delivery'];
    $ending = $_POST['ending'];
    $unit_price = $_POST['unit_price'];
    $remarks = $_POST['remarks'];

    $sql = "UPDATE inventory SET 
            item='$item', 
            beginning=$beginning, 
            delivery=$delivery, 
            ending=$ending, 
            unit_price=$unit_price, 
            remarks='$remarks' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

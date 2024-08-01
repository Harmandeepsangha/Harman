<?php
include 'db.php';

if (isset($_POST['place_order'])) {
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $order_details = $_POST['order_details'];

    $sql = "INSERT INTO orders (customer_name, customer_email, order_details) VALUES ('$customer_name', '$customer_email', '$order_details')";
    if ($conn->query($sql) === TRUE) {
        header('Location: orders.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Place an Order</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Place an Order</h1>
    <form action="order.php" method="post">
        <label for="customer_name">Name:</label>
        <input type="text" name="customer_name" required><br>
        <label for="customer_email">Email:</label>
        <input type="email" name="customer_email" required><br>
        <label for="order_details">Order Details:</label>
        <textarea name="order_details" required></textarea><br>
        <input type="submit" name="place_order" value="Place Order">
    </form>
</body>
</html>

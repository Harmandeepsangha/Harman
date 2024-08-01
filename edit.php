<?php
include 'db.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $order_details = $_POST['order_details'];

    $sql = "UPDATE orders SET customer_name='$customer_name', customer_email='$customer_email', order_details='$order_details' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header('Location: orders.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM orders WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Order</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Edit Order</h1>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="customer_name">Name:</label>
        <input type="text" name="customer_name" value="<?php echo $row['customer_name']; ?>"><br>
        <label for="customer_email">Email:</label>
        <input type="email" name="customer_email" value="<?php echo $row['customer_email']; ?>"><br>
        <label for="order_details">Order Details:</label>
        <textarea name="order_details"><?php echo $row['order_details']; ?></textarea><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>
</html>

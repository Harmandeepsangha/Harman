<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $reservation_date = $_POST['date'];
    $reservation_time = $_POST['time'];
    $guests = $_POST['guests'];
    $special_requests = $_POST['special_requests'];

    $sql = "INSERT INTO reservations (name, email, phone, reservation_date, reservation_time, guests, special_requests)
            VALUES ('$name', '$email', '$phone', '$reservation_date', '$reservation_time', '$guests', '$special_requests')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successfully created!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Name - Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="reservations.php">Reservations</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <div class="welcome">
            <h1>Welcome to Restaurant Name</h1>
            <p>Experience the best cuisine in town.</p>
            <a href="reservations.php" class="cta-button">Make a Reservation</a>
        </div>
        <div class="home-images">
            <img src="download.jpeg" alt="Restaurant Interior">
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Restaurant Name. All rights reserved.</p>
        <ul>
            <li><a href="https://facebook.com">Facebook</a></li>
            <li><a href="https://instagram.com">Instagram</a></li>
            <li><a href="https://twitter.com">Twitter</a></li>
        </ul>
    </footer>
</body>
</html>

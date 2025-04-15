<?php
session_start();

if ( $_SESSION['logged_in'] !== true) {
    // User is not logged in, redirect to login page
    header("Location: l.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civic Infrastructure Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <nav>
        <a href="#">Home</a>
        <a href="aboutus.html">About Us</a>
        <a href="tracking.html">Tracking</a>
        <a href="logout.php">logout</a>
    </nav>

    <header>
        <span>Hello <?php echo $_SESSION['name']; ?></span>
        <h1>Welcome to Civic Infrastructure Dashboard</h1>
    </header>

    <section class="complaint-section">
        <h2>File a Complaint</h2>
        <p> click below to submit your complaint.</p>
        <a href="cf.html" class="btn">Go to Complaint Form</a>
    </section>

    <div class="complaint-types">
        <div class="box">Electricity Issue</div>
        <div class="box">Road Problem</div>
        <div class="box">Water Supply Issue</div>
        <div class="box">Sanitation Problem</div>
    </div>
</body>
</html>

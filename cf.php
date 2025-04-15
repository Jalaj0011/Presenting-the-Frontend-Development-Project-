<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cc";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$email = $_POST["email"];
$problem = $_POST["problem"];
$description = $_POST["description"];

$sql = "INSERT INTO complain (name, email, problem, description) VALUES ('$name', '$email', '$problem', '$description')";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Complaint submitted successfully!</h2>";
    echo "<p>Your issue has been recorded. Updates will be sent to your registered email.</p>";
} else {
    echo "<h2>Error submitting complaint.</h2>";
    echo "<p>Please try again later.</p>";
}

mysqli_close($conn);
?>

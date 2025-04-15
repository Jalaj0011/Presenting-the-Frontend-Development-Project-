<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sp";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pass = $_POST["password"];
    $query = "INSERT INTO users (username, name, email, phone, password) VALUES ('$user', '$name', '$email', '$phone', '$pass')";

    if (mysqli_query($conn, $query)) {
        // echo "Sign-up successful!";
        header("Location: l.html");
    } else {
        // echo "Error: " . mysqli_error($conn);
        echo "username already exits";

    }


}

mysqli_close($conn);
?>

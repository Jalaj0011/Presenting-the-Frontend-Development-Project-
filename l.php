<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = mysqli_connect("localhost", "root", "", "sp");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = $result->fetch_assoc();
        // print_r($row);
        $_SESSION["name"] = $row['name'];
        $_SESSION['logged_in'] = true;
        header("Location: dashboard.php");
    } else {
        echo "wrong username or password";
    }

    mysqli_close($conn);
}
?>

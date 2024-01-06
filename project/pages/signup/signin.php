<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'granfest';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $signin_username = $_POST['signin_username'];
    $signin_password = $_POST['signin_password'];

    $query = "SELECT * FROM users WHERE username = '$signin_username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($signin_password, $row['password'])) {
            echo "Login successful";
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

$conn->close();
?>

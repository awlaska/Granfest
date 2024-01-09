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
    $signup_username = $_POST['signup_username'];
    $signup_password = password_hash($_POST['signup_password'], PASSWORD_DEFAULT);
    $signup_email = $_POST['signup_email'];

    $checkQuery = "SELECT * FROM users WHERE username = '$signup_username' OR email = '$signup_email'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        echo "Username or email already in use";
    } else {
        $insertQuery = "INSERT INTO users (username, password, email) VALUES ('$signup_username', '$signup_password', '$signup_email')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "User registration successful";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

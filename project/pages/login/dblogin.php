<?php
$conn = new mysqli('localhost', 'reduardoferreira', '123456', 'granfest');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $signin_email = $_POST['email'];
    $signin_password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$signin_email'";
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

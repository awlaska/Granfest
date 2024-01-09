<?php
$host = 'localhost';
$username = 'reduardoferreira';
$password = '123456';
$database = 'granfest';

$conn = new mysqli($localhost, $root, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $signup_fname = $_POST['fname'];
    $signup_lname = $_POST['lname'];
    $signup_password = password_hash($_POST['uppassword'], PASSWORD_DEFAULT);
    $signup_email = $_POST['upemail'];

    $checkQuery = "SELECT * FROM user WHERE email = '$signup_email'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        echo "Este Email já está em uso!";
    } else {
        $insertQuery = "INSERT INTO user (fname, lname, upemail, uppassword) VALUES ('$signup_fname', '$signup_lname' '$signup_email', '$signup_password')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "Utilizador Registado com sucesso!";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>

<?php

$dsn ="mysql:host=localhost; dbname=granfest";
$dbusername = "root";
$dbpassword = "";

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}   catch(PDOException $e){
    echo "Connection Failed: " . $e->getMessage();
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];

    try{
        $query = "INSERT INTO users (firstname, lastname, email, pwd) VALUES (?, ?, ?, ?);";

        //Prepared Statements para não haver injeção da nossa database

        $stmt = $pdo->prepare($query);
        $stmt->execute([$firstname, $lastname, $email, $password]);

        $pdo = null;
        $stmt = null;

        header("Location: ../signup.php");

        die();

    } catch(PDOException $e){
        die("Query Failed: ". $e->getMessage());
    }
}
else {
    header("Location: ../signup.php");
}

/*$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $signup_fname = $_POST['fname'];
    $signup_lname = $_POST['lname'];
    $signup_email = $_POST['upemail'];
    $signup_password = password_hash($_POST['uppassword'], PASSWORD_DEFAULT);

    $checkQuery = "SELECT * FROM users WHERE email = '$signup_email'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        echo "Email already in use";
    } else {
        $insertQuery = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$signup_fname','$signup_lname''$signup_email', '$signup_password')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "User registration successful";
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
*/

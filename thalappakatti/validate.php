<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "thalappakatti";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    $existingEmailQuery = "SELECT * FROM Customer WHERE Email = '$Email'";
    $result = $conn->query($existingEmailQuery);
    if ($result->num_rows > 0) {
        $errors[] = "Email already exists";
    }

    if (strlen($Password) < 8 || !preg_match('/[A-Z]/', $Password) || !preg_match('/[a-z]/', $Password) || !preg_match('/[0-9]/', $Password) || !preg_match('/[^A-Za-z0-9]/', $Password)) {
        $errors[] = "Password should be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO Customer (Name, Email, Password) VALUES ('$Name', '$Email','$Password')";
        if ($conn->query($sql)) {
            echo "Account created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

$conn->close();
?>

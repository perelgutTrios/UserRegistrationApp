<?php
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $silly_number = $_POST["silly_number"];

    $sql = "INSERT INTO users (first_name, last_name, email, password, silly_number)
            VALUES ('$first_name', '$last_name', '$email', '$password', '$silly_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

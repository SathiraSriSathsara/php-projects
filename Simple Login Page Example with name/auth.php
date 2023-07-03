<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

// coded by Sathira Sri Sathsara

    $username = "sam";
    $password = "puka";

    if ($user === $username) {
        if (strcasecmp($pass, $password) === 0) {
            header("Refresh: 3; URL=content.php");
            echo "Welcome bro";
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "Incorrect username";
    }
}
?>

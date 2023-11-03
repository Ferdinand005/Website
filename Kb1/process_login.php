<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // You should validate the username and password here against your database or other storage.

    // For this example, let's assume the username and password are correct.
    $name = "John"; // Replace with the user's actual name.
    $Prodi = "Computer Science"; // Replace with the user's program.

    echo $name . ", You are from " . $Prodi;
}
?>

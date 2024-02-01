<?php
$title = "Lecture 3";
include 'lect2/header.php';
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Process the data (in this example, we'll just display it)
    echo "Hello, $name! Your email is: $email";
}
include 'lect2/footer.php';
?>
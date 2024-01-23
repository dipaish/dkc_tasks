<?php
include '../layout/header.php';
/* isset function: 
The isset function in PHP is a built-in function used to determine if a variable has been set, or if it has a value. 
If the variable is set and has a value, the isset function returns TRUE, otherwise it returns FALSE.

$_POST array
The $_POST array is used to collect data submitted to the server through an HTML
 form with the method="post" attribute.

When a form is submitted, the data entered into the form fields is sent to
 the server as a series 
of key-value pairs in the $_POST array.

*/
if (isset($_POST["first_name"]) && isset($_POST["last_name"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

    echo "<h3>Your name is $first_name $last_name </h3>";
} 
else { ?>

<form action="" method="post">
  First Name: <input type="text" name="first_name" required><br>
  Last Name: <input type="text" name="last_name" required><br>
  <input type="submit" value="Submit">
</form> 
<?php
} 
include '../layout/footer.php';
?>


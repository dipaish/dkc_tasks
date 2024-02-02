<?php
include 'lect2/header.php';
// This is your first script in PHP
echo "Hello, world!";

// PHP and HTML can be used together
echo "<h1>Welcome to PHP Programming!</h1>";

// PHP is case sensitive
$myVariable = "Hello";
//$myvariable is not the same as $myVariable
//echo $myvariable; // This will give an error

// Using and printing a string with a variable
$myString = "PHP Programming";
echo $myString;

// Echoing quotes in PHP
echo "He said, \"Learn PHP. It's fun!\"";

// Echoing variables
$var1 = "Hello This is test";
$var2 = "World";
echo $var1 . " " . $var2; 

// Echoing variables and text
echo "This is " . $var1 . " from the " . $var2; 

// Printing multiple strings
echo "Hello, ", "World!", " How", " are", " you?";

// Printing in a new line (in a browser):
echo "Hello, World!<br>";
echo "How are you?<br>";

//Printing in a new line (in a command-line interface)
echo "Hello, World!\n";
echo "How are you?\n";
include 'lect2/footer.php';
?>

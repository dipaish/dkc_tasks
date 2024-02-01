
<?php 
$title = "Lecture 3";
include 'lect2/header.php';
# PHP supports several types of variable scope

# Local Scope
/*
 - Variables defined within a function are considered to have a local scope. 
 - They are only accessible within that function. 
 - Once the function finishes executing, the variables within it are destroyed.
*/
function myFunction() {
    $x = 10; // $x has a local scope
    echo $x;
}

myFunction();
// let's try to echo $x outside of the function 

echo $x;

/*
# Global Scope

- Variables declared outside of all functions and classes have global scope.
- They can be accessed from anywhere within the script, including inside functions.
- To access the global variable, use global keyword

*/

$y = 20; // $y has global scope
function anotherFunction() {
    global $y; // Access the global variable
    echo $y;
}

anotherFunction(); // Output: 20



/*
Static Scope: 
- On completion of a function, all of its variables are deleted
- In order to not delete a local variable static keyword can be used

*/

function counter() {
    static $count = 0; // $count is a static variable
    $count++;
    echo  "<br>" . $count . "<br>";
}

counter(); // Output: 1
counter(); // Output: 2


/* Predefined Variables 
- Special variables in PHP that are automatically available for use in your scripts without the need to declare or define them. 
- These variables provide information and data related to various aspects of your PHP script's execution environment, server, and client interactions.

Some common examples of predefined variables in PHP include:

$_SERVER: Contains information about the server and the current script's environment, such as server name, request method, and user agent.

$_GET: Holds data sent to the script via HTTP GET requests, typically from query parameters in the URL.

$_POST: Stores data sent to the script via HTTP POST requests, often from HTML forms.

$_SESSION: Enables the storage of session variables, which can persist across multiple requests and are useful for maintaining user state.

$_COOKIE: Contains data sent from the client's browser as cookies, which can be used to store user-specific information.

$_FILES: Provides information about files uploaded to the server via HTTP POST requests, including file names and file types.

$_REQUEST: A combined array that includes data from $_GET, $_POST, and $_COOKIE, allowing you to access data from various sources.

$_ENV: Gives access to environment variables, which can be useful for retrieving system configuration settings.

$GLOBALS: An array containing all global variables, including user-defined global variables.

*/

// Example 1: $_SERVER: Provides information about the server and the current script's environment.

echo $_SERVER['HTTP_USER_AGENT']; // User-Agent string of the browser

// Example 2: 

$host = $_SERVER['DOCUMENT_ROOT'];
echo $host;

?>

<h1> Creating a simple form</h1>

<form action="process.php" method="post">
    Name: <input type="text" name="name" required> <br><br>
    Email: <input type="email" name="email" required> <br><br>
    <input type="submit" value="submit">
</form>

<?php 

// To handle the form data, create a PHP file named process.php where we will define what to do with the data we got from the form


include 'lect2/footer.php';
?>
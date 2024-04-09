<?php 
$title = "Exercise 3: Variable, Strings & Operators:";
include 'lect2/header.php'; ?>

<h3>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement
     to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 </h3>

     <h1>User Registration Form</h1>
    
    <form method="post" name="userRegForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob"><br><br>
        
        <label for="color">Select Color:</label>
        <input type="color" id="color" name="color"><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php 
    // Process the form data, in this example only name and email are handled
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        
        // Validate  user inputs (e.g., check email format)
        // You can add more validation and error handling here - (later on)

        echo "<h2>Thank you, $name!</h2>";
        echo "<p>Your email address is: $email</p>";
    }
    ?>

<?php include 'lect2/footer.php'; ?>

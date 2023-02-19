<?php
include 'header.php'; ?>

<h2> 1. Create an array of all course in this module and print them using a for loop.</h2>
<?php

    $courses = array("PHP", 1, "CMS", "Finnish 3");

    for ($i = 0; $i < count($courses); $i++) {
        echo $courses[$i] . "<br>";
    }
?>

<h2> 2.	Create an associative array that maps 
 country codes to country names and print it using a foreach loop. (at least 10 countries, example: FI => Finland )</h2>

 <?php

    $countries = array(
        "FI" => "Finland",
        "AL" => "Albania",
        "DZ" => "Algeria",
        "AS" => "American Samoa",
        "AD" => "Andorra"
        // Add more country codes and names here
    );

foreach ($countries as $code => $name) {
    echo "$code : $name <br>";
}
?>

<h2>3. Sort an array of numbers in ascending order and descending order.</h2>

<?php
    $numbers = array(3, 5, 1, 4, 2);

    sort($numbers);
    echo "Ascending order: " . implode(", ", $numbers) . "<br>";

    rsort($numbers);
    echo "Descending order: " . implode(", ", $numbers) . "<br>";
?>

<h2>4. Find the maximum and minimum values in an array and print the results.</h2>
<?php
    $numbers = array(3, 5, 1, 4, 2);

    $max = max($numbers);
    echo "Maximum value: $max\n";

    $min = min($numbers);
    echo "Minimum value: $min\n";
?>























<h2> 5. A simple calculator - dont use any external file such as action.php</h2>
<ol>
<li> Step 1: Create a form using get method to input 2 numbers.  </li>
<li> Step 2: Use if statement with isset function to store values into two variable upon clicking submit. </li>
<li> Step 3: Use Switch case to do the calculations. </li>
<li> Step 4: Print the result variable upon completion of the calcuation. </li>
<li> Step 5: The input boxes do not allow decimal places. Figure out how you can change your code to also accept decimal values like 5.6 </li>

</ol>
<form action="" method="get">
    <input type="number" name="num1" placeholder="Enter first number" step="any">
    <br><br>
    <input type="number" name="num2" placeholder="Enter second number" step="any">
    <br><br>
    <select name="operator">
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Calculate">
</form>

<?php

if (isset($_GET["submit"])) {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];

    switch ($operator) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            $result = $num1 / $num2;
            break;
        default:
            $result = "Error: Invalid operator";
    }
}

?>
<br><br>

<?php

if (isset($result)) {
    echo "<h2>Result: " . $result . "</h2>";
}

?>

<?php
/*
<h2> Write a function in PHP to convert hexadecimal value to its corresponding color name:</h2>


function hexToColorName($hex) {
    $colors = array(
        '#F0F8FF' => 'AliceBlue',
        '#FAEBD7' => 'AntiqueWhite',
        '#00FFFF' => 'Aqua',
        '#7FFFD4' => 'Aquamarine',
        '#F0FFFF' => 'Azure',
        // Add more colors and their hexadecimal values here
    );

    if (array_key_exists(strtoupper($hex), $colors)) {
        return $colors[strtoupper($hex)];
    } else {
        return 'Invalid color hexadecimal value';
    }
}
*/



include 'footer.php';
?>
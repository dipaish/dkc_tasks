<?php
$title = "Exercise 1";
include "header.php" ?>
<h3> 3.1 Write a simple PHP script to print your information (Name and your groupid) </h3>
<?php
echo "<p class='answer'>Deepak KC <br> BBCAP22 </p>";
?> 
<h3>  3.2 Write PHP code to display the following message. </h3>
<?php
echo "<p class='answer'>Hello World ! My name is  \"David \" </p>";
?>
<h3>3.3 Current Date </h3>
<?php echo "<p class='answer'>". date("d.m.Y") ."</p>"?>
<script>
document.write("Hello world this is JavaScript");
</script>
<noscript>
Please enable JavaScript to view this content,
</noscript>
<input type="button" onclick="hello()" value="Click Me">
<h3> 3.4 Variable in Php </h3>
<?php
$title1 = "PHP is interesting";
echo "<h2 class='answer'>" . $title1 . "</h2>";
?>
<script>
//window.alert
// window.alert("This will trigger an alert box");
// window.alert(5+10);
// document.write
document.write("Hello this is interesting");
    </script>
<h3> 3.5 Table & Variables </h3>
<button onclick="add()">Click to Add </button>
<hr>
<p id="place1" style="color:red; background-color:yellow;"> </p>
<span id="place2" style="color:red; background-color:green;"> </span>
<script>
document.getElementById("place1").innerHTML = "This will go to place1";
document.getElementById("place2").innerHTML = "This will go to span";

</script>

<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
echo "
<table class='answer table'>
<tr> 
<th> S.N </th><th> Name </th><th> Grade </th>
</tr>
<tr> 
<td> 1 </td><td> Pekka </td><td> $g1 </td>
</tr>
<tr> 
<td> 2 </td><td> Johanna </td><td> $g2 </td>
</tr>
<tr> 
<td> 3 </td><td> John </td><td> $g3 </td>
</tr>
</table>
";
?>
<h3> 4 Screenshot of the development environment </h3>
<img src="" alt="">

<h2>Change the background-color </h2>
<form>
<input type="color" id = "background" onchange="changeColor()">
</form>
<h2>Change the font color </h2>
<form>
<input type="color" id = "fcolor" onchange="changeFcolor()">
</form>
<?php include "footer.php" ?>




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


<h3> 3.4 Variable in Php </h3>
<?php
$title1 = "PHP is interesting";
echo "<h2 class='answer'>" . $title1 . "</h2>";
?>

<h3> 3.5 Table & Variables </h3>
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
<?php include "footer.php" ?>




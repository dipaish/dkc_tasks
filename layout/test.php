<?php

//$_SERVER['SCRIPT_FILENAME]  The absolute pathname of the origin PHP file, including the filename
// $_SERVER['DOCUMENT_ROOT'] the absolute path to the web server's document root. No trailing slash. 
$host = $_SERVER['SCRIPT_FILENAME'];
echo $host;

//array indexed array

$course = array("Databases", "PHP", "HTML5", "Finnish 2");

// to retreieve value 
echo "<br>" . $course[1];


//looping through an indexed array
$num = count($course);
for ($i = 0; $i < $num; $i++) {
    echo "<br> $i: $course[$i] <br>";
}

// associative arrays 
$course1 = array("C1" => "Databases", "C2" => 5, "C3" => "PHP");
echo "<hr>" . $course1['C2'];


//looping through associative arrays
foreach ($course1 as $x => $x_value){
    echo " <br>The course id is $x and the name is $x_value";
}

//multi dimensional arrays 

$marray = array(
    array(1,"Deepak",3, "Databases"),
    array(4,5,6)
);
echo "<br>" . $marray[0][1];
echo "<br>" . $marray[1][2] ."<br>";

// loop through multi dimensional arrays
$products = array (
    'laptops' =>array(
    'Acer' => "Acer 1234",
    'HP' => "HP 2020 Series",
    'Sony' => "Sony 2020"),
    'mobiles' =>array(
    'Samsung' => "S12 galaxy", 
    'Apple' => "Iphone 10",
    'Nokia' => 'Nokia 9899')
    );
    foreach ($products as $type => $items){
    foreach ($items as $key => $value)
    echo "$type: \t $key \t $value <br>";
    }

// array functions 
//is_array 
echo "<br>" . (is_array($host) ? "It is an array" : "It is not an array");


// sort function 
// sort arrays 
$course11 = array("Databases", "PHP", "HTML5", "Finnish 2");
rsort($course11);
$num = count($course11);
for ($i = 0; $i < $num; $i++) {
    echo "<br> $i: $course11[$i] <br>";
}
?>


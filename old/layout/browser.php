<?php
include '../layout/header.php';
$user_agent = $_SERVER['HTTP_USER_AGENT'];

/*
The strpos function in PHP is used to search for the first occurrence of a substring within a string. 
It returns the position of the first occurrence of the substring, or false if the substring is not found.

The strpos function has the following syntax:
int strpos(string $haystack, mixed $needle [, int $offset = 0 ]);
*/
if (strpos($user_agent, 'Edg') == true) {
    echo 'You are using Microsoft Edge.'; 
} elseif (strpos($user_agent, 'Firefox') == true) {
    echo 'You are using Mozilla Firefox.'; }
  elseif (strpos($user_agent, 'Chrome') == true) {
        echo 'You are using Google Chrome.';
} 
 else {
    echo 'Your browser could not be determined.';
}

include '../layout/footer.php'; 


/*
if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== false) {
    echo 'You are using Microsoft Edge.';
} else {
    echo 'You are not using Microsoft Edge.';
}
*/
?>
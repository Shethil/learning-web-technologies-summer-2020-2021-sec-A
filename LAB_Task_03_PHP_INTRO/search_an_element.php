<?php

// Write a PHP script to search an element from an array

$array = array('blue', 'red', 'green', 'black');

$key = array_search('green', $array); 
echo "For green the index number is $key <br>";

$key = array_search('black', $array);   
echo "For black the index number is $key <br>";

$key = array_search('red', $array); 
echo "For red the index number is $key <br>";

$key = array_search('blue', $array); 
echo "For blue the index number is $key <br>";

?>
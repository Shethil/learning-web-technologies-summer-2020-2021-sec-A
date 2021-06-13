<?php
 
 //Write a PHP script to print all the odd numbers between 10 to 100

echo "The odd numbers between 10 to 100: <br>";
$num = 9;

while ( $num <= 100 ) {
  print "$num"; 
  $num = $num + 2;
  echo "<br>";
}
 
?>
<?php
$n = 10;

$first = 0;
$second = 1;

echo "Fibonacci series: ";
for ($i = 1; $i <= $n; $i++) {
    echo $first . " ";
    $next = $first + $second; 
    $first = $second;         
    $second = $next;          
}
 echo "This program is written by Iqnoor 0221BCA138";

?>
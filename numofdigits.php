<?php 

$num = 153; 
$digits = 0;

while($num != 0){

$num = (int)($num/10);
$digits++;

}

echo "number of digits: $digits" 

?>
<?php

function isArm($num){

$digits = strlen($num);

$sum = 0;
$temp = $num;

while($temp>0){
 
$digit = $temp % 10;
$sum += pow($digit , $digits);
$temp = (int)($temp /10);
}

return $sum == $num;


}

$num = 153;

if(isArm($num)){
   echo "is Armstrong";
}
else{
   echo "not Armstrong";
}
?>
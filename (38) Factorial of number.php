<?php
function factorial($number)
{
  if ($number <= 1) {
    return 1;
  } else {
    return $number * factorial($number - 1);
  }
}

$number = 5;
echo "The factorial of " . $number . " is " . factorial($number) . "<br>";
echo"By Iqnoor 0221BCA138"
?>

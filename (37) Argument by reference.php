<?php
function selfMultiply (&$number)
{
  $number*=$number;
  return $number;
}

$mynum = 5;
echo $mynum ."<br>";

selfMultiply ($mynum);
echo $mynum ."<br>";
echo"By Iqnoor 0221BCA138"
?>

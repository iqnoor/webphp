<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$file = fopen("Welcome.txt", "r");
if ($file) {
    echo "By Iqnoor 0221BCA138";
    fclose($file);
} else {
    echo "<br>Failed to open file.";
}
?>
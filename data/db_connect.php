<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbName = "restaurant";

$conn = mysqli_connect($hostname, $username, $password, $dbName);
function cleaningInputs($input)
{
    $data = trim($input);
    $data = strip_tags($input);
    $data = htmlspecialchars($input);
    return $data;
}

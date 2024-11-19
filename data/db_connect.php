<?php
$hostname = "173.212.235.205";
$username = "emiliancodefacto_Emilian";
$password = "Akjjyglcb1995!";
$dbName = "emiliancodefacto_restaurant";

$conn = mysqli_connect($hostname, $username, $password, $dbName);
function cleaningInputs($input)
{
    $data = trim($input);
    $data = strip_tags($input);
    $data = htmlspecialchars($input);
    return $data;
}

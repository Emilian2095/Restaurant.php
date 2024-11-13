<?php
require_once 'db_connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM `dishes` WHERE id = {$id}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// var_dump($row);

if ($row['image'] != 'dishes.jpg') {
    unlink("images/{$row['image']}");
}

$deleteSql = "DELETE FROM `dishes` WHERE id = {$id}";
mysqli_query($conn, $deleteSql);
header("Location: index.php");

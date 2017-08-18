<?php

$dbHost = "kalopsia.ru";
$userName = "netology";
$dbPassword = "gfintn";
$dbName = "lesson41";


$link = mysqli_connect($dbHost, $userName, $dbPassword, $dbName);

mysqli_set_charset($link, "utf8");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    die();
}




$query = 'SELECT * FROM BOOKS';

$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $arr[] = $row;
}

include 'template.php';
?>


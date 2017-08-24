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




$query = 'SELECT * FROM BOOKS ';

if (!empty($_GET['isbn']) || !empty($_GET['name']) || !empty($_GET['author'])) {

    $query .= 'WHERE isbn LIKE "%' . mysqli_real_escape_string($link, $_GET['isbn']) . '%" ';
    $query .= 'and name LIKE "%' . mysqli_real_escape_string($link, $_GET['name']) . '%" ';
    $query .= 'and author LIKE "%' . mysqli_real_escape_string($link, $_GET['author']) . '%" ';
}



$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $arr[] = $row;
}

include 'template.php';
?>


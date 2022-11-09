<?php

$databaseHost = 'localhost';
$databaseName = 'db_paswa';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect(
    $databaseHost,
    $databaseUsername,
    $databasePassword,
    $databaseName
);

if($mysqli -> connect_error ){
    die("Dtabase error");
}
?>
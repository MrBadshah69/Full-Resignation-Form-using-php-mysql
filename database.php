<?php

$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "Fullresignationform";


$conn = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);

if (!$conn) {
    die("databse is not connected" . mysqli_connect_error());
};

$db = "CREATE DATABASE IF NOT EXISTS " . $DATABASE;

$con_db = mysqli_query($conn, $db);

$db_table = "CREATE TABLE IF NOT EXISTS `resignation`(
        `ID` int(11) NOT NULL,
        `Username` varchar(225) NOT NULL,
        `Email` varchar(225) NOT NULL,
        `Password` varchar(255) NOT NULL
      )";

$sql = mysqli_query($conn, $db_table);

if (!$sql) {
    echo "table not exists";
};

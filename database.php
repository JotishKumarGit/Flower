<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pro";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Connection is fields" . mysqli_connect());
}  
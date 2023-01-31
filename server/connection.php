<?php
$host = "localhost";
$username = "root";
$password = "";
$DB = "tetris";

$conn = mysqli_connect($host, $username, $password, $DB);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
<?php
include_once 'connection.php';

$score = json_decode(file_get_contents("php://input"))->score;
echo $score;
$sql = "UPDATE recorde SET score = $score WHERE 1;";
$result = mysqli_query($conn, $sql);
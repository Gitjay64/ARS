<?php
$servername = "jsr";
$db_username = "Jayesh";
$db_password = "Yogesh@12345";
$db_name = 'sample_db';

$conn = mysqli_connect($servername, $db_username, $db_password,$db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connection sucess";
// visit codeastro.com for more projects

<?php
$host = 'localhost';
$db = 'dbcbzryrqje97m';
$user = 'ui7tygtg6tjn5';
$pass = 'wajnehqi0o0m';
 
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

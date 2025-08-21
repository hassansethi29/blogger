<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM blogs WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<h1><?= $row['title'] ?></h1>
<p><strong>By:</strong> <?= $row['author'] ?></p>
<img src="uploads/<?= $row['image'] ?>" width="300"><br>
<p><?= nl2br($row['content']) ?></p>
<a href="index.php">Back to Home</a>
 

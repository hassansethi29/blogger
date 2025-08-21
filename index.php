<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>My Blogger</title>
</head>
<body>
<h1>Welcome to My Blogger</h1>
<a href="dashboard.php">Go to Dashboard</a>
<hr>
<?php
$sql = "SELECT * FROM blogs ORDER BY created_at DESC";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo "<h2>{$row['title']}</h2>";
    echo "<p><strong>By:</strong> {$row['author']}</p>";
    echo "<p>" . substr($row['content'], 0, 200) . "...</p>";
    echo "<a href='view.php?id={$row['id']}'>Read More</a><hr>";
}
?>
</body>
</html>
 

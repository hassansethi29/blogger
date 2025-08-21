<?php include 'config.php'; ?>
<h1>User Dashboard</h1>
<a href="add.php">Add New Blog</a><hr>
<?php
$result = $conn->query("SELECT * FROM blogs");
while($row = $result->fetch_assoc()) {
    echo "<h2>{$row['title']}</h2>";
    echo "<a href='edit.php?id={$row['id']}'>Edit</a> | ";
    echo "<a href='delete.php?id={$row['id']}'>Delete</a><hr>";
}
?>

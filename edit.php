<?php include 'config.php';
$id = $_GET['id'];
$row = $conn->query("SELECT * FROM blogs WHERE id = $id")->fetch_assoc();
?>
<form method="POST">
    Title: <input type="text" name="title" value="<?= $row['title'] ?>"><br>
    Author: <input type="text" name="author" value="<?= $row['author'] ?>"><br>
    Content:<br>
    <textarea name="content" rows="10" cols="50"><?= $row['content'] ?></textarea><br>
    <input type="submit" name="update" value="Update">
</form>
<?php
if(isset($_POST['update'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
 
    $sql = "UPDATE blogs SET title='$title', author='$author', content='$content' WHERE id=$id";
    if($conn->query($sql)){
        echo "Updated!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
 

<?php include 'config.php'; ?>
<form method="POST" enctype="multipart/form-data">
    Title: <input type="text" name="title"><br>
    Author: <input type="text" name="author"><br>
    Image: <input type="file" name="image"><br>
    Content:<br>
    <textarea name="content" rows="10" cols="50"></textarea><br>
    <input type="submit" name="submit" value="Post">
</form>
<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
 
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp, "uploads/".$image);
 
    $sql = "INSERT INTO blogs (title, author, content, image) 
            VALUES ('$title', '$author', '$content', '$image')";
    if($conn->query($sql)){
        echo "Blog posted!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
 

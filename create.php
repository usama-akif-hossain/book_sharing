<?php include 'db.php'; ?>
<?php
if(isset($_POST['submit'])){
  $title = $_POST['title'];
  $author = $_POST['author'];
  $genre = $_POST['genre'];

  $conn->query("INSERT INTO books (title,author,genre) VALUES ('$title','$author','$genre')");
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Book</title><link rel="stylesheet" href="style.css"></head>
<body>
  <h2>➕ Add New Book</h2>
  <form method="post">
    <input type="text" name="title" placeholder="Book Title" required><br>
    <input type="text" name="author" placeholder="Author" required><br>
    <input type="text" name="genre" placeholder="Genre"><br>
    <button type="submit" name="submit">Save</button>
  </form>
</body>
</html>

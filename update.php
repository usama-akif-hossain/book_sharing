<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM books WHERE id=$id");
$row = $result->fetch_assoc();

if(isset($_POST['update'])){
  $title = $_POST['title'];
  $author = $_POST['author'];
  $genre = $_POST['genre'];
  $status = $_POST['status'];

  $conn->query("UPDATE books SET title='$title', author='$author', genre='$genre', status='$status' WHERE id=$id");
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Book</title><link rel="stylesheet" href="style.css"></head>
<body>
  <h2>✏️ Edit Book</h2>
  <form method="post">
    <input type="text" name="title" value="<?= $row['title']; ?>" required><br>
    <input type="text" name="author" value="<?= $row['author']; ?>" required><br>
    <input type="text" name="genre" value="<?= $row['genre']; ?>"><br>
    <select name="status">
      <option value="Available" <?= $row['status']=="Available"?"selected":""; ?>>Available</option>
      <option value="Borrowed" <?= $row['status']=="Borrowed"?"selected":""; ?>>Borrowed</option>
    </select><br>
    <button type="submit" name="update">Update</button>
  </form>
</body>
</html>

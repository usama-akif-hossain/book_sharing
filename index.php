<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>📚 Book Sharing Community</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>📚 Shared Books</h2>
  <a href="create.php" class="btn">+ Add New Book</a>

  <table>
    <tr>
      <th>ID</th><th>Title</th><th>Author</th><th>Genre</th><th>Status</th><th>Actions</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM books ORDER BY created_at DESC");
    while($row = $result->fetch_assoc()):
    ?>
    <tr>
      <td><?= $row['id']; ?></td>
      <td><?= $row['title']; ?></td>
      <td><?= $row['author']; ?></td>
      <td><?= $row['genre']; ?></td>
      <td><?= $row['status']; ?></td>
      <td>
        <a href="update.php?id=<?= $row['id']; ?>" class="btn-edit">Edit</a>
        <a href="delete.php?id=<?= $row['id']; ?>" class="btn-del">Delete</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>

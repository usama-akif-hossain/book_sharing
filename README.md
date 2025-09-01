# 📚 Book Sharing

A simple **CRUD web application** built with **PHP, MySQL, HTML, and CSS** that allows users to share and manage books.

## 🚀 Features

* ➕ **Add Book** – Enter book title, author, genre.
* 📖 **View Books** – List of all shared books with details.
* ✏️ **Update Book** – Edit book information and status (Available/Borrowed).
* ❌ **Delete Book** – Remove a book entry.
* 🔄 Real-time book **status tracking**.

## 🛠️ Technologies Used

* **Frontend:** HTML, CSS
* **Backend:** PHP
* **Database:** MySQL
* **Server Environment:** XAMPP / WAMP / MAMP

## 📂 Project Structure

```
book_sharing/
│── index.php       # Home page – list books (Read)
│── create.php      # Add new book (Create)
│── update.php      # Edit book details (Update)
│── delete.php      # Remove book (Delete)
│── db.php          # Database connection
│── style.css       # Styling
│── books.sql       # Database schema
```

## ⚙️ Installation & Setup

### 1. Clone or Download

```bash
git clone https://github.com/usama-akif-hossain/book_sharing.git
```

Or just download and extract the ZIP.

### 2. Move Project

* Place the folder inside your server’s root directory:

  * **XAMPP (Windows/Linux):** `htdocs/`
  * **MAMP (Mac):** `htdocs/`

### 3. Create Database

1. Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
2. Create a database named `book_sharing`.
3. Import the provided `books.sql` file.

### 4. Configure Database

Update **db.php** if needed:

```php
$host = "localhost";
$user = "root";     // default MySQL user
$pass = "";         // your MySQL password
$db   = "book_sharing";
```

### 5. Run the Project

Open in your browser:

```
http://localhost/book_sharing/index.php
```

## 🔮 Future Enhancements

* User authentication system
* Search and filter books
* Book rating & review
* Email notifications for borrowed/returned books

## 📜 License

This project is **open-source**. Feel free to use and modify for learning or personal use.

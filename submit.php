CREATE DATABASE mywebsite;
USE mywebsite;

CREATE TABLE submissions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  content TEXT,
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "mywebsite");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name    = $_POST['name'];
$email   = $_POST['email'];
$content = $_POST['content'];

// Insert into database (safe prepared statement)
$stmt = $conn->prepare("INSERT INTO submissions (name, email, content) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $content);

if ($stmt->execute()) {
  echo "✅ Thank you! Your content has been submitted.";
} else {
  echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
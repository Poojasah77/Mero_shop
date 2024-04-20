<?php
$servername = "localhost";
$username = "local";
$password = "12345";
$dbname = "mero"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

// Insert data into the 'products' table
$sql = "INSERT INTO products (name, price, quantity) VALUES ('$name', '$price', '$quantity')";

if ($conn->query($sql) === TRUE) {
  echo "<h2>New record created successfully</h2>";
  echo "<a class='gobacklink' href='add.php'>Go back</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
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
$id = $_POST['id'];

// Check if a product with the given ID exists
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Product exists, delete it
  $sql = "DELETE FROM products WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    echo "<h2 style='color: green;'>Item with ID - {$id} : Deleted successfully</h2>";
    echo "<a class='gobacklink' href='add.php'>Go back</a>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
} else {
  // Product does not exist
  echo "<h2 style='color: red;'>Item with ID - {$id} does not exist</h2>";
  echo "<a class='gobacklink' href='add.php'>Go back</a>";
}

$conn->close();
?>
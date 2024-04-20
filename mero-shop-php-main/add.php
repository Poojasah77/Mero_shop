<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles/styles.css" />
  <link rel="stylesheet" href="styles/add.css" />
  <link rel="icon" href="logo.ico" />
  <title>Mero Shop: Inventory</title>
</head>

<body>
  <header>
  <h2> <img src='./logo.ico' width="32px" alt="mero shop logo Mero"/> Mero Shop</h2>
    <nav>
      <ul>
        <li><a href="index.php">Shopping</a></li>
        <li><a href="add.php">Inventory</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
  </nav>
  </header>
  <main>
    <h2>Inventory Management</h2>
    <div>
      <h3>➕ Add New Item</h3>
      <form method="POST" action="add_product.php">
        <label for="name">Product Name</label>
        <input type="text" id="name" name="name" />
        <label for="price">Product Price</label>
        <input type="number" id="price" name="price" />
        <label for="quantity">Product Quantity</label>
        <input type="number" id="quantity" name="quantity" />
        <button type="submit" id="add-item" class="action-button">Add Item</button>
      </form>
    </div>
    <div>
      <h3 class="marginTop4">🔄 Update existing Item</h3>
      <form method="POST" action="update_product.php">
        <label for="id">Product Id</label>
        <input type="number" id="id" name="id" />
        <label for="name">Product Name</label>
        <input type="text" id="name" name="name" />
        <label for="price">Product Price</label>
        <input type="number" id="price" name="price" />
        <label for="quantity">Product Quantity</label>
        <input type="number" id="quantity" name="quantity" />
        <button type="submit" id="update-item" class="action-button">Update Item</button>
      </form>
    </div>
    <div>
      <h3 class="marginTop4">❌ Delete Item</h3>
      <form method="POST" action="delete_product.php">
        <label for="id">Product Id</label>
        <input type="number" id="id" name="id" />
        <button type="submit" id="delete-item" class="action-button">Delete Item</button>
      </form>
    </div>
  </main>
  <!-- <footer>
      <p>&copy; 2024 Mero Shop</p>
      <p>Pooja Shah</p>
    </footer> -->
  <script src="js/script.js"></script>
</body>

</html>
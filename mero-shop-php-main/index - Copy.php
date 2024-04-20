<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/styles.css" />
    <link rel="icon" href="logo.ico" />
    <title>Pet Online Shop: Shopping</title> 
  </head>
  <body>
    <header>
      <h2> <img src='./logo.ico' width="32px" alt="mero shop logo Mero"/> Pet Online Shop</h2>
      <nav>
        <ul>
          <li><a href="index.php">Shopping</a></li>
          <li><a href="add.php">Inventory</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div id="infobar"></div>
      <div id="cart-button"></div>
      <button id="buy-button" class="action-button">Buy All</button>
      <section id="products">
        <!-- Product cards will go here -->
      </section>
    </main>
    <!-- <footer>
      <p>&copy; 2024 Mero Shop</p>
      <p>Pooja Shah</p>
    </footer> -->
    <script src="js/script.js"></script>
    <?php include 'connect.php';?>
  </body>
</html>

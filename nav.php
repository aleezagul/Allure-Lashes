<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="src/css/style.css">


  <title>Document</title>
</head>
<header>
  <div class="burger-menu" onclick="toggleMenu()">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>

  <nav id="nav-menu">
    <ul>
      <li><a href="index.php">Home</a></li>

      <li class="dropdown">
        <a class="dropdownbtn">Shop Products</a>

        <div class="dropdown-content">
          <a href="products.php">Natural Lashes</a>
          <a href="">Party Lashes</a>
          <a href="">Wedding Lashes</a>
        </div>
      </li>

      <li><a href="contactus.php">Contact</a></li>

    </ul>
  </nav>

  <div class="logo">
    <h1>Allure Lashes</h1>
  </div>

  <div class="nav-icons">
    <a href="">
      <img src="Images/searchicon.png" alt="Search">
    </a>
    <a href="cart.php" class="cart-icon">
      <img src="Images/bag.png" alt="Shopping Cart">
      <span class="cart-count">0</span>
    </a>
  </div>

</header>
<hr>
<div class="announcement-bar">
  <p>Free delivery on orders over £25</p>
</div>

<body>
  <script src="updatecartcount.js"></script>
  <script>
  function toggleMenu() {
    const menu = document.getElementById('nav-menu');
    menu.classList.toggle('show');
  }
  </script>
</body>

</html>
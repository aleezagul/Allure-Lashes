<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products</title>
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>


<body>
  <?php include 'nav.php';?>

  <!--<main class="productsmain ">-->

  <div class="filter-bar">

    <div class="filter-menu" onclick="toggleFilter()">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
    <div class="filter" id="filter-menu">

      <div class="filter-dropdown">
        <button>Eye Shape <i class="fas fa-chevron-down"></i></button>
        <div class="filter-content">
          <a href="">Round</a>
          <a href="">Hooded</a>
          <a href="">Almond</a>
        </div>
      </div>

      <div class="filter-dropdown">
        <button>Style <i class="fas fa-chevron-down"></i></button>
        <div class="filter-content">
          <a href="">Party</a>
          <a href="">Full</a>
          <a href="">Glam</a>
        </div>

      </div>
      <div class="filter-dropdown">
        <button>Length <i class="fas fa-chevron-down"></i></button>
        <div class="filter-content">
          <a href="">Long</a>
          <a href="">Medium</a>
          <a href="">Short</a>
        </div>

      </div>

      <h2><span>201</span> products found</h2>
    </div>

    <div class="filter-dropdown sort-dropdown">
      <button>Sort by:Popular <i class=" fas fa-chevron-down"></i></button>
      <div class="filter-content sort-content">
        <a href="">Feaured</a>
        <a href="">A-Z</a>
        <a href="">Z-A</a>
        <a href="">Price: low to high</a>
        <a href="">Price: high to low</a>
      </div>
    </div>
  </div>

  <div class="products">
    <div class="product-card" data-id="p1" data-name="LuxeLash" data-price="8.99" .prodata-image="Images/lashpack.jpg">
      <div class="product-info"><img src="Images/lashpack.jpg" alt="Natural Lashes" />
        <h3>LuxeLash</h3>
        <p>Ultimate Lash Glam</p>
      </div>
      <button class="cart-button">
        <span class="button-text">Add to Cart</span>
        <span class="button-price">£8.99</span>
      </button>
    </div>

    <div class="product-card" data-id="p2" data-name="GlamourGaze" data-price="12.99" data-image="Images/lashpack.jpg">
      <img src="Images/lashpack.jpg" alt="Natural Lashes" />
      <h3>GlamourGaze</h3>
      <p>naturla lashess lashes</p>

      <button class="cart-button">
        <span class="button-text">Add to Cart</span>
        <span class="button-price">£12.99</span>
      </button>
    </div>
    <div class="product-card" data-id="p3" data-name="VelvetLash" data-price="14.99" data-image="Images/lashpack.jpg">
      <img src="Images/lashpack.jpg" alt="Natural Lashes" />
      <h3>VelvetLash</h3>
      <p>Soft. Luxurious.</p>

      <button class="cart-button">
        <span class="button-text">Add to Cart</span>
        <span class="button-price">£14.99</span>
      </button>
    </div>

    <div class="product-card" data-id="p4" data-name="Lash Envy" data-price="12.99" data-image="Images/lashpack.jpg">
      <img src="Images/lashpack.jpg" alt="Natural Lashes" />
      <h3>Lash Envy</h3>
      <p>Irresistible Volume </p>
      <button class="cart-button">
        <span class="button-text">Add to Cart</span>
        <span class="button-price">£12.99</span>
      </button>
    </div>

    <div class="product-card" data-id="p5" data-name="MysticLash" data-price="7.99" data-image="Images/lashpack.jpg">
      <img src="Images/lashpack.jpg" alt="Natural Lashes" />
      <h3>MysticLash</h3>
      <p>Whimsical.</p>
      <button class="cart-button">
        <span class="button-text">Add to Cart</span>
        <span class="button-price">£7.99</span>
      </button>
    </div>



    <div class="product-card" data-id="p6" data-name="FierceFlutter" data-price="10.99"
      data-image="Images/lashpack.jpg">
      <img src="Images/lashpack.jpg" alt="Natural Lashes" />
      <h3>FierceFlutter</h3>
      <p>Powerful Lash Look</p>

      <button class="cart-button">
        <span class="button-text">Add to Cart</span>
        <span class="button-price">£10.99</span>
      </button>
    </div>
    <div class="product-card" data-id="p7" data-name="LashChic" data-price="13.99" data-image="Images/lashpack.jpg">
      <img src="Images/lashpack.jpg" alt="Natural Lashes" />
      <h3>LashChic</h3>
      <p>Modern. Stylish. Stunning.
      </p>

      <button class="cart-button">
        <span class="button-text">Add to Cart</span>
        <span class="button-price">£13.99</span>
      </button>
    </div>
    <div class="product-card" data-id="p8" data-name="DazzleLash" data-price="5.99" data-image="Images/lashpack.jpg">
      <img src="Images/lashpack.jpg" alt="Natural Lashes" />
      <h3>DazzleLash</h3>
      <p>Alluring Sparkle & Shine</p>

      <button class="cart-button">
        <span class="button-text">Add to Cart</span>
        <span class="button-price">£15.99</span>
      </button>
    </div>
    <div class="product-card" data-id="p9" data-name="LuxeLashLuxeFlutter" data-price="12.99"
      data-image="Images/lashpack.jpg">
      <img src="Images/lashpack.jpg" alt="Natural Lashes" />
      <h3>LuxeFlutter</h3>
      <p>Flutter & Voluminous</p>

      <button class="cart-button">
        <span class="button-text">Add to Cart</span>
        <span class="button-price">£12.99</span>
      </button>
    </div>
    <div class="product-card" data-id="p10" data-name="LuxeLashBloomLash" data-price="7.99"
      data-image="Images/lashpack.jpg">
      <img src="Images/lashpack.jpg" alt="Natural Lashes" />
      <h3>LashBloom</h3>
      <p>Flourish Your Eyes</p>

      <button class="cart-button">
        <span class="button-text">Add to Cart</span>
        <span class="button-price">£7.99</span>
      </button>
    </div>
  </div>
  </section>
  <script src="addtocart.js"></script>
  <script src="script.js"></script>

  <script src="updatecartcount.js"></script>
  <script>
  function toggleFilter() {
    document.querySelector('.filter').classList.toggle('show');
    document.querySelector('.filter-menu').classList.toggle('show');
  }
  </script>
</body>
<?php include 'footer.php';?>

</html>
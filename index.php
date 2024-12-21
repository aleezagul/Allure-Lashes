<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="src/css/styles.css">


  <title>Allure Lashes</title>
</head>

<body>
  <?php include 'nav.php'; ?>


  <main>
    <div class="hero">
      <div class="slideshow">
        <img src="images/hero8.jpg" class="slide active" alt="Image 1">
        <img src="images/hero3.png" class="slide" alt="Image 2">
        <img src="images/hero7.png" class="slide" alt="Image 3">

      </div>
      <div class="navigation">
        <button class="nav-btn" data-slide="0"></button>
        <button class="nav-btn" data-slide="1"></button>
        <button class="nav-btn" data-slide="2"></button>
      </div>
      <button class="herobtn">Shop Now</button>

    </div>

    <section class="featured-section">
      <h1>Trending</h1>

      <div class="products">

        <div class="product-card" data-id="t1" data-name="AllureLash" data-price="6.99"
          data-image="Images/lashpack.jpg">
          <img src="Images/lashpack.jpg" alt="AllureLash" />
          <h3>AllureLash</h3>
          <p>Magnetic Eye Appeal</p>
          <button class="cart-button">
            <span class="button-text">Add to Cart</span>
            <span class="button-price">£6.99</span>
          </button>
        </div>

        <div class="product-card" data-id="t2" data-name="Lash & Luxe" data-price="6.99"
          data-image="Images/lashpack.jpg">
          <img src="Images/lashpack.jpg" alt="Lash & Luxe" />
          <h3>Lash & Luxe </h3>
          <p>High-End Lash Magic</p>
          <button class="cart-button">
            <span class="button-text">Add to Cart</span>
            <span class="button-price">6.99</span>
          </button>
        </div>


        <div class="product-card" data-id="t3" data-name="OpulentLash" data-price="6.99"
          data-image="Images/lashpack.jpg">
          <img src="Images/lashpack.jpg" alt="OpulentLash" />
          <h3>OpulentLash</h3>
          <p> Lavish. Bold. Dramatic.</p>
          <button class="cart-button">
            <span class="button-text">Add to Cart</span>
            <span class="button-price">£6.99</span>
          </button>
        </div>


    </section>



    <section class="hero-products-2">
      <div class="discover-post">
        <img src="Images/model8.avif" alt="">
        <h1>Eyelure Lashes</h1>
        <p>Shop Our Irresistibly Alluring Lashes. Out Now.</p> <button>Discover Lashes</button>
      </div>
      <div class="discover-products">
        <div class="product-card" data-id="d1" data-name="TwinkleLash" data-price="12.99"
          data-image="Images/lashpack.jpg">
          <img src="Images/lashpack.jpg" alt="Natural Lashes" />
          <h3>TwinkleLash</h3>
          <p>Glistening Elegance
          </p>
          <button class="cart-button">
            <span class="button-text">Add to Cart</span>
            <span class="button-price">£12.99</span>
          </button>
        </div>
        <div class="product-card" data-id="d2" data-name="DiamondFlutter" data-price="14.99"
          data-image="Images/lashpack.jpg">
          <img src="Images/lashpack.jpg" alt="Natural Lashes" />
          <h3>DiamondFlutter</h3>
          <p>Luxury & Elegance</p>
          <button class="cart-button">
            <span class="button-text">Add to Cart</span>
            <span class="button-price">£14.99</span>
          </button>
        </div>
        <div class="product-card" data-id="d3" data-name="Siren Lashes" data-price="14.99"
          data-image="Images/lashpack.jpg">
          <img src="Images/lashpack.jpg" alt="Natural Lashes" />
          <h3>Siren Lashes</h3>
          <p>Captivating. Bold. Fierce.</p>
          <button class="cart-button">
            <span class="button-text">Add to Cart</span>
            <span class="button-price">£14.99</span>
          </button>
        </div>
        <div class="product-card" data-id="d4" data-name="PureLash" data-price="8.99" data-image="Images/lashpack.jpg">
          <img src="Images/lashpack.jpg" alt="Natural Lashes" />
          <h3>PureLash</h3>
          <p>Simple. Natural. Beautiful</p>
          <button class="cart-button">
            <span class="button-text">Add to Cart</span>
            <span class="button-price">£8.99</span>
          </button>
        </div>
    </section>

    <div class="collection-sec">
      <h1>Shop By Collection</h1>
      <section class=" collection">
        <div class="collection-1">
          <img src="Images/model5.jpg" alt="">
          <p class="overlaytext">Best Sellers</p>

        </div>
        <div class="collection-1">
          <img src="Images/model2.jpg" alt="">
          <p class="overlaytext">Featured</p>

        </div>
        <div class="collection-1">
          <img src="Images/model3.jpg" alt="">
          <p class="overlaytext">Party Collection</p>

        </div>
        <div class="collection-1">
          <img src="Images/model4.jpg" alt="">
          <p class="overlaytext">Wedding Collection</p>

        </div>
    </div>
    </section>



    <!--Reviews section-->

    <section class="reviews" id="reviews">

      <div class="review-slider">
        <div class="wrapper">
          <div class="box">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <h3>Soft and Lightweight</h3>
            <p>hese lashes are super soft and feel so light, I forget I’m even wearing them! Perfect for daily wear.
            </p>
            <h5>Sara</h5>




          </div>
          <div class="box">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <h3>Fluffy and Full</h3>
            <p>They give a dramatic yet natural look—full volume without being over the top. Love them!</p>
            <h5>Hadiya</h5>



          </div>

          <div class="box">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <h3>Comfortable All Day</h3>
            <p>Wore them all day, and they didn’t irritate my eyes. Perfect for sensitive skin!</p>
            <h5>Mira</h5>

          </div>

          <div class="box">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <h3>Long-Lasting</h3>
            <p>These lashes are reusable and stay in great shape after multiple uses. Great value for the price!</p>
            <h5>Emma</h5>
          </div>
        </div>
      </div>
    </section>


    <!--Stay slideshow section-->

    <section class="slider-section  bottom-section">


      <section class="image-slider">
        <div class="slider-container">
          <img src="Images/sf10.png" alt="Image 1" class="slides">
          <img src="Images/slideimg.png" alt="Image 2" class="slides">
          <img src="Images/sf16.jpg" alt="Image 3" class="slides">
          <img src="Images/sf17.png" alt="Image 4" class="slides">
          <img src="Images/sf14.jpeg" alt="Image 5" class="slides">
        </div>
        <button class="next-btn">Next</button>
      </section>
    </section>

    <section class="subscription">
      <h1>Stay Updated</h1>
      <p>Subscribe to our newsletter for exclusive offers</p>
      <form action="" method="post">
        <input type="email" placeholder="Enter your email" required>
        <button type="submit">Subscribe</button>
      </form>
    </section>



    <script src="script.js"></script>
    <script src="addtocart.js"></script>

</body>

<?php include "footer.php";?>


</html>
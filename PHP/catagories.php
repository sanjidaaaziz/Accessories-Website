<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Category</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- header section starts  -->

    <header class="header">
      <a href="#" class="logo">
      <img
      src="logo.png"
      alt="logo of Elixir"
      height="52"
      width="140"
    />
      <nav class="navbar">
        <a href="home.php">home</a>
        <a href="Neckpieces.php">Neckpieces</a>
        <a href="Bracelets.php">Bracelets</a>
        <a href="Earrings.php">earrings</a>
        <a href="Rings.php">rings</a>
        <a href="contact.php">review</a>
        <a href="orders.php">order</a>
      </nav>
      <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        
      </div>

      <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box" class="fas fa-search"></label>
      </form>

      <div class="shopping-cart">
        <div class="box">
          <i class="fas fa-trash"></i>
          <img src="cart1.jpg" alt="" />
          <div class="content">
            <h3>asymmetric Chain</h3>
            <span class="price">৳ 350</span>
            <span class="quantity">qty : 1</span>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-trash"></i>
          <img src="cart2.jpg" alt="" />
          <div class="content">
            <h3>Bracelet</h3>
            <span class="price">৳ 150</span>
            <span class="quantity">qty : 1</span>
          </div>
        </div>
        <div class="box">
          <i class="fas fa-trash"></i>
          <img src="cart3.jpg" alt="" />
          <div class="content">
            <h3>trinity Earring</h3>
            <span class="price">৳ 350</span>
            <span class="quantity">qty : 1</span>
          </div>
        </div>
        <div class="total">total : ৳ 850</div>
        <a href="#" class="btn">checkout</a>
      </div>

      <form action="" class="login-form">
        <h3>login now</h3>
        <input type="email" placeholder="your email" class="box" />
        <input type="password" placeholder="your password" class="box" />
        <p>forget your password <a href="#">click here</a></p>
        <p>don't have an account <a href="#">create now</a></p>
        <input type="submit" value="login now" class="btn" />
      </form>
    </header>
    <!--header section ends-->

    <!--home section starts-->
    <section class="home" id="home">
      <div class="content">
      </br>
        <h3>the touch of <span>Elegance</span></h3>
        <p>
          We're here to decorate you with love. So, let's get elegent with
          Elixir.
        </p>
      </br>
        </div>
      </div>
    </section>
    <!--home section ends-->

    

    <!--catagories section starts-->
  <section class="categories" id="categories">
      <h1 class="heading">product <span>categories</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="cat1.jpg" alt="" />
          <h3>Neckpieces</h3>
          <p>upto 45% off</p>
          <a href="Neckpieces.php" class="btn">shop now</a>
        </div>

        <div class="box">
          <img src="cat2.jpg" alt="" />
          <h3>Bracelets</h3>
          <p>upto 45% off</p>
          <a href="Bracelets.php" class="btn">shop now</a>
        </div>

        <div class="box">
          <img src="cat3.jpg" alt="" />
          <h3>Earrings</h3>
          <p>upto 45% off</p>
          <a href="Earrings.php" class="btn">shop now</a>
        </div>

        <div class="box">
          <img src="cat4.jpg" alt="" />
          <h3>rings</h3>
          <p>upto 45% off</p>
          <a href="Rings.php" class="btn">shop now</a>
        </div>
      </div>
    </section>

    <!--catagories section ends-->
<!-- footer section starts  -->

<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3> E L I X I R <i class="fas fa-shopping-bag"></i> </h3>
          <p> We're here to decorate you with love. So, let's get elegent with
            Elixir. Delivering all over Bangladesh!</p>
          <div class="share">
              <a href="https://www.facebook.com/elixir.accessories.7" target="'_blank" class="fab fa-facebook-f"></a>
              <a href="https://instagram.com/elixir__accessories?igshid=YmMyMTA2M2Y=" target="'_blank" class="fab fa-instagram"></a>
              <a href="https://twitter.com/AzizSanjida?t=u8a-FdM-ZtQvL5djNokgZg&s=09" target="'_blank" class="fab fa-twitter"></a>
              <a href="https://t.me/sanjidaaziz" target="'_blank" class="fab fa-telegram-plane"></a>
          </div>
      </div>

      <div class="box">
          <h3>contact info</h3>
          <a href="#" class="links"> <i class="fas fa-phone"></i> +880 1784533104 </a>
          <a href="#" class="links"> <i class="fas fa-phone"></i> +880 1622084621 </a>
          <a href="#" class="links"> <i class="fas fa-envelope"></i>elixir.h8@gmail.com</a>
          <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Feni, Bangladesh - 3900 </a>
      </div>

      <div class="box">
          <h3>quick links</h3>
          <a href="index.html #home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
          <a href="index.html #features" class="links"> <i class="fas fa-arrow-right"></i> features </a>
          <a href="index.html #products" class="links"> <i class="fas fa-arrow-right"></i> products </a>
          <a href="catagories.html" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
          <a href="index.html #review" class="links"> <i class="fas fa-arrow-right"></i> review </a>
          <a href="#" class="links"> <i class="fas fa-arrow-right"></i> order </a>
      </div>

      <div class="box">
          <h3>Extra Links</h3>
          <a href="login.php" class="links"> <i class="fas fa-arrow-right"></i> Login </a>
          <a href="register.php" class="links"> <i class="fas fa-arrow-right"></i> Register </a>
          <a href="orders.php" class="links"> <i class="fas fa-arrow-right"></i> My orders </a>
          <a href="cart.php" target="'_blank" class="links"> <i class="fas fa-arrow-right"></i> My cart </a>
          <img src="b-n-r-cod.webp" class="payment-img" alt=""
          >
      </div>

  </div>

  <div class="credit"> created by <span> Sanjida Binta Aziz </span> | all rights reserved </div>

</section>

<!-- footer section ends -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!--js file link-->
    <script src="script.js"></script>
  </body>
</html>
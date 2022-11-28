<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Delivery</title>

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
      <a href="index.html #home">home</a>
      <a href="index.html #features">features</a>
      <a href="index.html #products">products</a>
      <a href="catagories.html">categories</a>
      <a href="index.html #review">review</a>
      <a href="#order">order</a>
    </nav>
    <div class="icons">
      <div class="fas fa-bars" id="menu-btn"></div>
      <div class="fas fa-search" id="search-btn"></div>
      <div class="fas fa-shopping-cart" id="cart-btn"></div>
      <div class="fas fa-user" id="login-btn"></div>
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
          <h3>Double-layer Chain</h3>
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
    <section class="starting" id="starting">
      <div class="content">
        <h3>Free<span> Delivery</span></h3>
        <p>
          We deliver our products all over in bangladesh. Here we have some offers by which customer can gain the free delivery service!
        </p>
        <a href="home.php #features" class="btn">go back</a>
      </div>
    </section>
    <section class="payment" id="payment">
      <h1 class="heading">Eligiable<span>Offers</span></h1>
  
      <div class="box-container">
        <div class="box">
          <img src="mon.png" alt="" />
          <h3>MEGA DEALS</h3><p>If payment is done in advanced, customer can get his product without any delivery charge!</p>
        </div>
  
        <div class="box">
          <img src="5k.png" alt="" />
          <h3>HOT DEALS</h3><p>up to 5000Tk shopping delivery charge is free! this is a limited offer!</p>
        </div>
  
        <div class="box">
          <img src="sale.png" alt="" />
          <h3>SALES</h3><p>free delivery service is available for up to 50% sales. Limited offer!</p>
        </div>
        
    </section>
    <!-- footer section starts  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>E L I X I R <i class="fas fa-shopping-bag"></i></h3>
          <p>
            We're here to decorate you with love. So, let's get elegent with
            Elixir. Delivering all over Bangladesh!
          </p>
          <div class="share">
            <a
              href="https://www.facebook.com/elixir.accessories.7"
              target="'_blank"
              class="fab fa-facebook-f"
            ></a>
            <a
              href="https://instagram.com/elixir__accessories?igshid=YmMyMTA2M2Y="
              target="'_blank"
              class="fab fa-instagram"
            ></a>
            <a
              href="https://twitter.com/AzizSanjida?t=u8a-FdM-ZtQvL5djNokgZg&s=09"
              target="'_blank"
              class="fab fa-twitter"
            ></a>
            <a
              href="https://t.me/sanjidaaziz"
              target="'_blank"
              class="fab fa-telegram-plane"
            ></a>
          </div>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#" class="links">
            <i class="fas fa-phone"></i> +880 1784533104
          </a>
          <a href="#" class="links">
            <i class="fas fa-phone"></i> +880 1622084621
          </a>
          <a href="#" class="links">
            <i class="fas fa-envelope"></i>elixir.h8@gmail.com</a
          >
          <a href="#" class="links">
            <i class="fas fa-map-marker-alt"></i> Feni, Bangladesh - 3900
          </a>
        </div>
        <div class="box">
          <h3>quick links</h3>
          <a href="index.html #home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
          <a href="index.html #features" class="links"> <i class="fas fa-arrow-right"></i> features </a>
          <a href="index.html #products" class="links"> <i class="fas fa-arrow-right"></i> products </a>
          <a href="catagories.html" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
          <a href="index.html #review" class="links"> <i class="fas fa-arrow-right"></i> review </a>
          <a href="#" class="links"> <i class="fas fa-arrow-right"></i> order </a>
          </a>
        </div>
        <div class="box">
          <h3>newsletter</h3>
          <p>subscribe for latest updates</p>
          <input type="email" placeholder="your email" class="email" />
          <input type="submit" value="subscribe" class="btn" />
          <img src="b-n-r-cod.webp" class="payment-img" alt="" />
        </div>
      </div>

      <div class="credit">
        created by <span> Sanjida Binta Aziz </span> | all rights reserved
      </div>
    </section>

    <!-- footer section ends -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!--js file link-->
    <script src="script.js"></script>
  </body>
</html>
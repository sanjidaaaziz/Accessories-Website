<//?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:register.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E L I X I R</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      header {
        width: 100%;
        height: 100vh;
        background: linear-gradient(
            rgba(248, 239, 219, 0.2),
            rgba(255, 255, 255, 0.2)
          ),
          url(banner.jpg);
        background-size: cover;
        font-family: sans-serif;
      }
      nav {
        width: 100%;
        height: 100px;
        color: #130f40;
        display: flex;
        justify-content: space-around;
        align-items: center;
      }
      .menu a {
        text-decoration: none;
        color: #130f40;
        padding: 10px 20px;
        font-size: 20px;
        position: relative;
      }
      .menu a:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 0%;
        height: 100%;
        border-bottom: 2px solid #b77923;
        transition: 0.4s linear;
      }
      .menu a:hover:before {
        width: 90%;
      }
    </style>
  </head>
  <body>
    <input type="checkbox" id="check" />
    <header>
      <nav>
        <div <a href="#" class="logo">
          <img src="logo.png" alt="logo of Elixir" height="52" width="140" />
        </div>
        <div class="menu">
          <a href="index.html" target="'_blank">Home</a>
          <a href="index.html #features" target="'_blank">features</a>
          <a href="index.html #products" target="'_blank">Products</a>
          <a href="catagories.html" target="'_blank">Categories</a>
          <a href="index.html #review" target="'_blank">Review</a>
        </div>
        <label for="check">
          <i class="fas fa-bars menu-btn"></i>
          <i class="fas fa-times close-btn"></i>
        </label>
      </nav>
      <section class="front" id="front">
        <div class="content">
          <h3>the touch of <span>Elegance</span></h3>
          <p>
            We're here to decorate you with love. So, let's get elegent with
            Elixir.
          </p>
          <a href="register.php" target="'_blank" class="btn">shop now</a>
        </div>
      </section>
      <br /><br /><br /><br /><br />
      <div class="media">
        <a
          href="https://www.facebook.com/elixir.accessories.7"
          target="'_blank"
          class="fab fa-facebook-f"
        ></a>
        <a
          href="https://twitter.com/AzizSanjida?t=u8a-FdM-ZtQvL5djNokgZg&s=09"
          target="'_blank"
          class="fab fa-twitter"
        ></a>
        <a
          href="https://instagram.com/elixir__accessories?igshid=YmMyMTA2M2Y="
          target="'_blank"
          class="fab fa-instagram"
        ></a>
      </div>
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
      <!--js file link-->
      <script src="script.js"></script>
    </header>
  </body>
</html>

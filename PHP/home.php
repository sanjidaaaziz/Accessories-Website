<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart';
   }else{

       $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

       if(mysqli_num_rows($check_wishlist_numbers) > 0){
           mysqli_query($conn, "DELETE FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
       }

       mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
       $message[] = 'product added to cart';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="reg.css">
</head>
<body>
   
<?php @include 'header.php'; ?>

<!--<section class="home">

 <div class="content">
      <h3>The Touch Of Elegance</h3>
      <p>We're Here To Decorate You With Love. So, Let's Get Elegent With Elixir.</p>
      <a href="about.php" class="btn">discover more</a>
</div>
</section>-->
<section class="home" id="home">
      <div class="content">
      </br>
        <h3>The Touch Of <span>Elegance</span></h3>
        <p>
          We're Here To Decorate You With Love. So, Let's Get Elegent With
          Elixir.
        </p>
      </br>
        </div>
      </div>
    </section>


<section class="features" id="features">
      <h1 class="heading">Our <span>Features</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="feature1.png" alt="" />
          <h3>Premium Accessories</h3>
          <p>We offer premium quality women accessories with love and authenticity!</p>
          <a href="premium.html" class="btn">read more</a>
        </div>

        <div class="box">
          <img src="feature2.jpg" alt="" />
          <h3>Free Delivery</h3>
          <p>
            Delivering all over bangladesh. Also we have free delivery offers!
          </p>
          <a href="freedel.html" class="btn">read more</a>
        </div>

        <div class="box">
          <img src="feature3.jpg" alt="" />
          <h3>Easy Payments</h3>
          <p>
            The payments can be done through bkash, nagad, rocket. We also offer
            cash on delivery system!
          </p>
          <a href="payment.html" class="option-btn">read more</a>
        </div>
      </div>
    </section>
    <!--features section ends-->
<!--<section class="products">

 <h1 class="title">latest products</h1>

 <div class="box-container">

   <?php
      $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_products = mysqli_fetch_assoc($select_products)){
   ?>
   <form action="" method="POST" class="box">
     
      
      <img src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="" class="image">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
      <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
    <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="submit" value="add to cart" name="add_to_cart" class="btn">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

 </div>

   <div class="more-btn">
      <a href="home.php" class="option-btn">load more</a>
   </div>

</section>-->



<?php @include 'footer.php'; ?>

<script src="script1.js"></script>

</body>
</html>
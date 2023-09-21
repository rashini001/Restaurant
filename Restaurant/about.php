<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['cus_id'])){
   $user_id = $_SESSION['cus_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>About Us</h3>
   <p><a href="index.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>"Here, at One-Love Restaurant, we understand cravings.We know how important it is to get your food fast. At our location in Galle or online, you will find the best dishes you didn't know you craved.While we prepare our food fast, we develop the flavour slowly.Don't hesitate to pay us a visit if you share our passion for fresh dishes cooked with only the best ingredients.We promise an experience that will keep you coming back for more..."</p>

           <p> "Don't let hunger take control of you. Beat it with us!"</p>




         <a href="menu.php" class="btn">Our Menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>If you choose  orders from us, you will find the best dishes you didn't know you craved...</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>new recipes</h3>
         <p>After tasting any of our menu items, you will never want to leave...</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>Forget about the daily stress and come relax with us...</p>
      </div>

   </div>

</section>

<!-- steps section ends -->




<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>


</script>

</body>
</html>
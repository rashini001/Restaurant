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
   <title>findus</title>

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
   <h3>find us</h3>
   <p><a href="index.php">home</a> <span> / find us</span></p>
</div>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/findus-img.jpg" alt="">
      </div>

      <form action="" method="post">
         <h3>We are here!</h3>
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15871.506987107816!2d80.2440546943332!3d6.011656893396555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae172f162bf926d%3A0xc0444c5e8377446c!2sUnawatuna!5e0!3m2!1sen!2slk!4v1692983007343!5m2!1sen!2slk" width="100%" height="250" style="border:0;" allowfullscreen></iframe>
         <div class="social-icon">
               <a href="findus.php"><i class="fa fa-facebook"></i></a>
               <a href="findus.php"><i class="fa fa-twitter"></i></a>
                  <a href="findus.php"><i class="fa fa-pinterest"></i></a>
               <a href="findus.php"><i class="fa fa-rss"></i></a>
            </div>
      </form>

   </div>

</section>

<!-- contact section ends -->










<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->








<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
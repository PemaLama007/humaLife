<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/abt.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>"HumaLife" is described as an efficient online pharmacy with a web-based system for purchasing 
            prescription and non-prescription medications. It is designed to streamline inventory management,
             order tracking, and billing, reducing manual effort for pharmacists. The system maintains a user-friendly 
             database for medicines, users, and store details, while also tracking new products and expired medications.</p>
             <details>
             <summary>Read more</summary>
         <p>The goal of HumaLife is to simplify pharmacy data management, addressing issues like returns, expired medicines, 
             and faulty devices. It aims to enhance healthcare accessibility, reduce waiting times, and allow hospitals and
              clinics to distribute medicines online. The system supports prescription uploads,
             ensuring the sale of legal medicines only, and generates invoices for customer purchases.</p></details>
         <a href="contact.php" class="btn">contact us</a>
      </div>
   </div>

</section>

<!-- <section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>The customer service team was responsive and helpful, and my order arrived sooner than expected. I will definitely be using them again in the future."
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>"I've been a customer of this online pharmacy for a while now, and I've always been impressed with their service. The prices are unbeatable, and the quality of the medications is top-notch</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>"I was skeptical about ordering medication online, but this pharmacy exceeded my expectations.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>"I've been a customer of this online pharmacy for a while now, and I've always been impressed with their service. The prices are unbeatable, and the quality of the medications is top-notch.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>"I've had nothing but positive experiences with this online pharmacy. The website is easy to navigate, and I appreciate being able to track my order. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>"I was skeptical about ordering medication online, but this pharmacy exceeded my expectations. The customer service team was responsive and helpful, and my order arrived sooner than expected."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section> -->

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
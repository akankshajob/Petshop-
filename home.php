<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PETSHOP</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/17922330f3.js" crossorigin="anonymous"></script>
</head>
<body>
  <div id="header">
    <div class="container">
       <nav>
        <img src="images/logo3.png" class="logo3">
               <ul>
                 <li><a href="#">HOME</a></li>
                 <li><a href="#">SERVICES</a></li>
                 <li><a href="#">ABOUT US</a></li>
                 <li><a href="#">BLOGS</a></li>
                 <li><a href="pet.php">PETS</a></li>
                 <li><a href="cart.php">Cart</a></li>
                 <li><a href="#">(USER) <?php echo $_SESSION['username']; ?> </a></li>
                 <li><a href="logout.php">LOGOUT</a></li>
                 
              </ul>
       </nav>
       <div class="header-text"></div>
       <br>
       <br>
       <h1 align="center">WELCOME TO HAPPY PAWS STORE  </h1>
       <p align="center"><b>We offer all the best quality products & service for your adorable pets</b></p>
    </div>
  </div> 
  <br>
            <div class="container2">
              <br><br>
              <h1><b><i>Our Services</i></b></h1>
              <div class="col-md-3 text-center">
              <div class="service">
              <i class="fa-solid fa-syringe"></i>
              <h2>Vaccination for your lovely pets</h2>
              <div class="col-md-3 text-center"></div>
              <div class="service">
              <i class="fa-solid fa-dog"></i>
              <h2>Grooming & beauty care for pets</h2>
              <div class="col-md-3 text-center"></div>
              <div class="service">
              <i class="fa-solid fa-bone"></i>
              <h2>Balanced nutrition meals</h2>
              <div class="col-md-3 text-center"></div>
              <div class="service">
              <i class="fa-solid fa-phone-volume"></i>
              <h2>24x7 Free Support</h2>
              <div class="col-md-3 text-center"></div>
              <div class="service">
              <i class="fa-solid fa-cart-shopping"></i>
              <h2>Online Shopping</h2>
</div>
   </div></div> </div> </div>
</div>
</div>
  </div>
  <!----aboutusss-->
  <div id="about">
    <div class="container3">
      <div class="row">
        <div class="about-col-1">
          <img src="images/man.png">
        </div>
          <div class="about-col-2">
            <br>
    <h1><u> ABOUT US </h1></u>
    <br>
    <p>Heaven for all dogs and dog proprietors HAPPY PAWS STORE is a place that is devoted to giving you and your four-legged companions the best items, care, and life that we can. Like you, we realize that your dog is an immense piece of the family. They offer such a great amount to our lives  interminable fun, grins, and unrestricted love.We see pets as individuals from the family, so our point is to give clients items and administrations that can guarantee their darling pet will appreciate an upbeat, solid life.
      <br>
      <br>
      We know how essential the human-creature bond is, so our promise of quality creature care reaches out to each aspect of our business.
      <br>
      <br>
      Have you at any point met an enthusiastic creature.
      <br>
      <br> 
      All things considered, permit us the joy of acquainting you with our client benefit office.
      <br>
      <br>
      A standout amongst the most energizing motivations to visit our gathering is on the grounds that we have utilized huge numbers of the business most-regarded pet creators to handle your inquiries and discussion about their subject matters.</p>
  </section>
  </div>
</div>
</div>
</div>
<!---------------------blog-------------->

<div id="BLOGS">
    <div class="container4">
      <h1 class="sub-title">BLOGS</h1>
      <br>
      <br>
      <div class="work-list">
        <div class="work">
          <img src="images/the2.jpg">
        </div>
      </div>
    </div>
</div>
<div class="container5">
  <h3>Find us at</h3>
  <p>Address: Ravet,Shop no-7,Pune,Maharashtra.
    <br>
    Contact: +91 9024567894.
    <br>
    Email us at: Happypaws@gmail.com.
  </p>
</div>
<div 
</body>
</html>

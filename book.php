<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>book</title>
  <link rel="stylesheet" href="final-stylesheet.css">
  <link rel="stylesheet" href="final-book-stylesheet.css">
</head>
<body>
<!-- header section starts  -->
<section class="header" style="background-color: white;">
    <a href="home.php" class="logo"><b><h1 style="display: inline">✈️</h1>Travel with Us</b></a>
        <nav class="navbar" >
            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="package.php">Package</a>
            <a href="book.php" style="color: purple; font: bold; border: solid; padding: 2px 4px">Book</a>
            <a href="login.php">Admin</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
<!-- header section ends -->
    <div class="heading" style="background-image: url('images/book-bgg.jpg');">
        <h1>Book Now</h1>
    </div>
<!-- booking section-->
<section class="booking">
<h1 class="heading-title">Book your Trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="Enter your name" name="name">
            </div>

            <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Enter your email" name="email">
            </div>

            <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="Enter your number" name="phone">
            </div>

            <div class="inputBox">
            <span>address :</span>
            <input type="address" placeholder="Enter your address" name="address">
            </div>

            <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="Place you want to visit" name="location">
            </div>

            <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="Number of guests" name="guests">
            </div>

            <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrival">
            </div>

            <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
            </div>
        </div>
        <input type ="submit" values="submit" class="btn" name="send">
    </form>
</section>
<!--booking section ends-->

<?php
  $amount = 200; // Ye aapka dynamic value hai
?>
<!-- scanner section start-->
<section class="pay-scanner">
  <h1 style = "font-size: 40px;">Pay Now!</h1>
  <img src="images/qrcode.png" alt="">
  <h1>You have to pay for your booking: <?php echo $amount; ?> INR</h1>
  <input type="submit" values="Done" class="donePayment">
</section>
<!-- scanner section ends -->

<!-- footer section starts -->
<section class="footer">
  <div class="box-container">
    <div class="box">
      <h3>Quick Links</h3>
        <a href="home.php">home</a>
        <a href="about.php">about us</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </div>

    <div class="box">
      <h3>Extra Links</h3>
        <a href="#">ask questions </a>
        <a href="#">privacy policy </a>
        <a href="#">terms of use </a>
    </div>

    <div class="box">
      <h3>Contact Info</h3>
        <a href="#">+123-456-7890</a>
        <a href="#">+111-22-3333</a>
        <a href="#">travelwithus@gamil.com</a>
        <a href="#">delhi,india- 110001</a>
    </div>

    <div class="box">
      <h3>Follow Us</h3>
        <a href="#">facebook</a>
        <a href="#">twitter</a>
        <a href="#">instagram</a>
        <a href="#">linkdin</a>
    </div>
  </div>

  <div class="credit">created by <span> Poonam, Samridhi, Aanshu, Aman </span>|all right reserved!|</div>
</section>
<!-- footer section ends -->

<script>
  let submitOn = document.querySelector('.btn');
  let payScannerOn = document.querySelector('.pay-scanner');

  submitOn.onclick = () => {
    payScannerOn.style.display = 'inline-block';
  }else {
    payScannerOn.style.display = 'none';
  }
</script>

</body>
</html>
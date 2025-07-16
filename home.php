<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="final-stylesheet.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
</head>
<body>
    <!-- header section starts  -->
     <section class="header" style="background-color: white;">
        <a href="home.php" class="logo"><b><h1 style="display: inline">✈️</h1>Travel with Us</b></a>
        <nav class="navbar" >
            <a href="home.php" style="color: purple; font: bold; border: solid; padding: 2px 4px">Home</a>
            <a href="about.php">About Us</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
            <a href="login.php">Admin</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
     </section>
      <!-- header section ends -->

      <!-- home section starts -->
      <section class="home">

        <div class="swiper home-slider">

          <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/home-slide-img1.jpg) no-repeat">
              <div class="content">
                <span>Discover, Explore, Travel</span>
                <h3>Discover the new places</h3>
                <a href="package.php" class="btn">Discover more</a>
              </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide-img2.jpg) no-repeat">
              <div class="content">
                <span>Discover, Explore, Travel</span>
                <h3>Travel around the world</h3>
                <a href="package.php" class="btn">Discover more</a>
              </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide-img4.jpg) no-repeat">
              <div class="content">
                <span>Discover, Explore, Travel</span>
                <h3>go places, find yourself</h3>
                <a href="package.php" class="btn">discover more</a>
              </div>
            </div>
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>

        </div>
      </section>

      <!-- home section ends -->

   <!-- services section starts -->
    <section class="services">
      <h1 class="heading-title">Our Services</h1>
      <div class="box-container">

        <div class="box">
          <img src="images/adven2.jpg" alt="">
          <h3>ADVENTURES</h3>
        </div>

        <div class="box">
          <img src="images/tg.png" alt="">
          <h3>TOUR GUIDE</h3>
        </div>

        <div class="box">
          <img src="images/trekk.jpg" alt="">
          <h3>TREKKING</h3>
        </div>

        <div class="box">
          <img src="images/fire.jpg" alt="">
          <h3>CAMP FIRE</h3>
        </div>

        <div class="box">
          <img src="images/direction.jpg" alt="">
          <h3>OFF ROAD</h3>
        </div>

        <div class="box">
          <img src="images/campingNew.jpg" alt="">
          <h3>CAMPING</h3>
        </div>
    </div>
  </section>
   <!-- service section ends  -->

<!-- home about section starts  -->
  <section class="home-about">

    <div class="image" style="width: 50%;">
      <img src="images/home-about.jpeg" alt="">
    </div>

    <div class="content" style="width: 50%;">
      <h3>About Us</h3>
      <p>Welcome to our <b>Travel with Us</b> website – your one-stop destination for exploring the world's most beautiful places with ease and comfort. 
        Our mission is to make travel planning simple, enjoyable, and accessible for everyone. 
        Whether you're looking to relax on a beach, explore historical landmarks, or embark on an adventurous journey, we provide detailed guides, curated tour packages, and hassle-free booking options to suit your travel needs. 
        Start your journey with us and experience the world like never before!</p>
      <a style="text-decoration: none;" href="about.php" class="btn">read more</a>
    </div>

   </section>
<!-- home about section ends  -->

   <!-- home package starts  -->
    <section class="home-packages">
      <h1 class="heading-title">Our Packages</h1>
      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/home-package-img1.jpeg" alt="">
          </div>
          <div class="content">
            <h3>Taj Mahal</h3>
            <p>Welcome to the Taj Mahal, one of the most iconic landmarks in the world and a UNESCO World Heritage Site. 
            A symbol of eternal love, the Taj Mahal combines elements of Islamic, Persian, and Indian architecture.</p>
              <a href="book.php" class="btn">book now </a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/home-package-img2.jpg" alt="">
          </div>
          <div class="content">
            <h3>Ooty</h3>
            <p>Ooty, the "Queen of Hills," is a serene hill station nestled in the Nilgiri Hills of Tamil Nadu, known for its lush tea gardens, misty mountains, and pleasant climate. 
              It's a perfect getaway for nature lovers and adventure seekers alike.</p>
              <a href="book.php" class="btn">book now </a>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/home-package-img3.jpeg" alt="">
          </div>
          <div class="content">
            <h3>Goa</h3>
            <p>Goa, India's vibrant beach paradise, offers a perfect blend of sun, sand, and culture. 
              <br>From scenic coastlines to historic churches <br>and buzzing nightlife, it's a must-visit tropical escape.</p>
              <a href="book.php" class="btn">book now</a>
          </div>
        </div>

      </div>
      <div class="load-more" > <a href="package.php" class="btn">load more </a></div>
    </section>
   <!-- home package ends  -->


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
        <a href="#">ask questions</a>
        <a href="#">privacy policy</a>
        <a href="#">terms of use</a>
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
<script src="final-script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".home-slider", {
    loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
</script>
</body>
</html>
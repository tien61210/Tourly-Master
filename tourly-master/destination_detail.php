<?php
include "connect.php";

if (isset($_GET['country'])) {
  $country = $_GET['country'];

  $sql = "SELECT destination, country, short_description, image_link,image_link2,image_link3,image_link4,image_link5 FROM destination_details WHERE country = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param('s', $country);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $destination = $row['destination'];
    $country = $row['country'];
    $short_description = $row['short_description'];
    $image_link = $row['image_link'];
    $image_link2 = $row['image_link2'];
    $image_link3 = $row['image_link3'];
    $image_link4 = $row['image_link4'];
    $image_link5 = $row['image_link5'];
  } else {
    echo '<p>Destination not found.</p>';
    exit; // Exit the script to prevent further execution
  }
} else {
  echo '<p>Destination not specified.</p>';
  exit; // Exit the script to prevent further execution
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the submitted form data
  $address = $_POST['address'];
  $payment = $_POST['payment'];

  // Additional processing, e.g., database storage, email notifications, etc.
  // Display a confirmation message to the user
  echo '<h2>Booking Confirmed!</h2>';
  echo '<p>Destination: ' . $destination . '</p>';
  echo '<p>Country: ' . $country . '</p>';
  echo '<p>Address: ' . $address . '</p>';
  echo '<p>Payment Details: ' . $payment . '</p>';
}
?>

<!-- Rest of the HTML and JavaScript code remains unchanged -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourly - Travel agancy</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    function scrollToDestination() {
      document.getElementById('destination').scrollIntoView();
    }
    $(document).ready(function () {
      // Number of packages to initially display
      const initialDisplayCount = 3;

      // Hide packages beyond the initialDisplayCount
      $("#packageWrapper .package-card").slice(initialDisplayCount).hide();

      // Toggle the visibility of packages on "View All Packages" button click
      $("#viewAllButton").on("click", function () {
        $("#packageWrapper .package-card").slideDown();
        $(this).hide(); // Hide the "View All Packages" button after showing all packages
      });
    });
  </script>
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+01123456790" class="helpline-box">

          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>

          <div class="wrapper">
            <p class="helpline-title">For Further Inquires :</p>

            <p class="helpline-number">+01 (123) 4567 90</p>
          </div>

        </a>

        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" alt="Tourly logo">
        </a>

        <div class="header-btn-group">

          <button class="search-btn" aria-label="Search">
            <ion-icon name="search"></ion-icon>
          </button>

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="index.php" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="index.php" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="index.php" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="./assets/images/logo-blue.svg" alt="Tourly logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list">

            <li>
              <a href="index.php" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="index.php#destination" class="navbar-link" data-nav-link>destination</a>
            </li>

            <li>
              <a href="index.php#package" class="navbar-link" data-nav-link>packages</a>
            </li>

            <li>
              <a href="index.php#gallery" class="navbar-link" data-nav-link>gallery</a>
            </li>

            <li>
              <a href="index.php#contact" class="navbar-link" data-nav-link>contact us</a>
            </li>

          </ul>

        </nav>

        <button class="btn btn-primary" onclick="scrollToDestination()">Book Now</button>

      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <main id="booking">
          <div class="booking_container">
            <div class="booking_header">
              <div class="booking_name">
                <div class="booking_title">
                  <span>
                    <?php
                    echo '<h2>' . $destination . ', ' . $country . '</h2>';
                    ?>
                  </span>
                </div>
                <div class="booking_location">
                  <?php
                  echo '<span>' . $short_description . '</span>';
                  ?>
                </div>
              </div>
              <div class="booking_button">
                <div class="booking_price">
                  <span>$240/night</span>
                </div>
                <div class="booking_button">
                <a class="btn btn-primary" href="booking_form.php?destination=<?php echo urlencode($destination); ?>&country=<?php echo urlencode($country); ?>">Book now</a>
                </div>
              </div>

            </div>
            <div class="booking_image_container">
              <div class="booking_image">
                <div class="img">
                  <img src="<?php echo $image_link;?>" alt="">
                </div>
                <div class="img">
                  <img
                    src="<?php echo $image_link2;?>"
                    alt="">
                </div>
                <div class="img">
                  <img
                    src="<?php echo $image_link3;?>"
                    alt="">
                </div>
                <div class="img">
                  <img
                    src="<?php echo $image_link4;?>"
                    alt="">
                </div>
                <div class="img">
                  <img
                    src="<?php echo $image_link5;?>"
                    alt="">
                </div>
              </div>
            </div>
            <hr style="margin: 50px 0;">
            <div class="booking_detail_container">
              <div class="booking_detail">
                <div class="booking_detail_title">
                  <span>overview</span>
                </div>
                <div class="booking_detail_paragraph">
                  <p>Lago di Braies, also known as Lake Braies, is a stunning alpine lake nestled in the heart of the
                    Dolomites in South Tyrol, Italy. Surrounded by majestic peaks and lush forests, this picturesque
                    lake is renowned for its crystal-clear emerald waters that reflect the beauty of the surrounding
                    landscape.</p>

                  <p>The lake stretches over 1.2 kilometers and boasts a width of approximately 300 meters, offering
                    visitors ample space to enjoy its tranquility and breathtaking views. With its pristine shores and
                    the impressive Croda del Becco mountain as a backdrop, Lago di Braies is a favorite destination for
                    nature enthusiasts, photographers, and hikers.</p>

                  <p>In addition to its natural allure, Lago di Braies holds historical significance. Legends and tales
                    from the region are often associated with this enchanting lake, adding to its allure and mystery.
                  </p>

                  <p>Visitors can indulge in a range of activities, including boating on the serene waters, taking
                    leisurely strolls along the well-marked paths, or embarking on more challenging hikes into the
                    surrounding mountains. The lake's calm ambiance also invites visitors to relax and unwind, taking in
                    the serene beauty that surrounds them.</p>

                  <p>Whether visiting in the vibrant summer months when the lake sparkles under the sun or during the
                    quieter winter season when it transforms into a frozen wonderland, Lago di Braies never fails to
                    captivate the hearts of those who venture to its shores.</p>

                  <p>If you're seeking a peaceful and awe-inspiring retreat amidst the wonders of nature, Lago di Braies
                    is a destination that promises an unforgettable experience.</p>
                </div>
              </div>
            </div>
          </div>
        </main>
      </section>







  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" alt="Tourly logo">
          </a>

          <p class="footer-text">
            Urna ratione ante harum provident, eleifend, vulputate molestiae proin fringilla, praesentium magna conubia
            at
            perferendis, pretium, aenean aut ultrices.
          </p>

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            Feel free to contact and reach us !!
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+01123456790" class="contact-link">+01 (123) 4567 90</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:info.tourly.com" class="contact-link">info.tourly.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>3146 Koontz, California</address>
            </li>

          </ul>

        </div>

        <div class="footer-form">

          <p class="form-text">
            Subscribe our newsletter for more update & news !!
          </p>

          <form action="" class="form-wrapper">
            <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>

            <button type="submit" class="btn btn-secondary">Subscribe</button>
          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="">codewithsadee</a>. All rights reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Term & Condition</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">FAQ</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
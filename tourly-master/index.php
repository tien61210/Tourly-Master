<?php
include "connect.php"

  ?>

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
    // Thêm sự kiện "click" cho các hàng trong bảng danh sách chuyến bay
    const tableRows = document.querySelectorAll("#flight-list table tbody tr");
    tableRows.forEach((row) => {
      row.addEventListener("click", () => {
        // Lấy thông tin chi tiết chuyến bay từ các ô trong hàng đã chọn
        const flightNumber = row.cells[0].textContent;
        const departure = row.cells[1].textContent;
        const destination = row.cells[2].textContent;
        const departureDate = row.cells[3].textContent;
        const departureTime = row.cells[4].textContent;

        // Tạo đường dẫn dẫn tới trang flight_detail.html và chuyển hướng
        const flightDetailUrl = `flight_detail.html?flightNumber=${flightNumber}&departure=${departure}&destination=${destination}&departureDate=${departureDate}&departureTime=${departureTime}`;
        window.location.href = flightDetailUrl;
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
        <a href="index.html" class="logo">
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
              <a href="#home" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="#destination" class="navbar-link" data-nav-link>destination</a>
            </li>

            <li>
              <a href="#package" class="navbar-link" data-nav-link>packages</a>
            </li>

            <li>
              <a href="#gallery" class="navbar-link" data-nav-link>gallery</a>
            </li>

            <li>
              <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
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
        <div class="container">

          <h2 class="h1 hero-title">Journey to explore world</h2>

          <p class="hero-text">
            Let's cherish the memories we create, for they will become the cherished stories we share with generations
            to come.
          </p>

          <div class="btn-group">
            <button class="btn btn-primary">Learn more</button>

            <button class="btn btn-secondary" onclick="scrollToDestination()">Book now</button>
          </div>

        </div>
      </section>

      <!-- 
        - #TOUR SEARCH
      -->

      <section class="tour-search">
        <div class="container">
          <form action="" class="tour-search-form" onsubmit="return showFlights()">
            <div class="input-wrapper">
              <label for="destination" class="input-label">Search Destination*</label>
              <input type="text" name="destination" id="destination" required placeholder="Enter Destination"
                class="input-field">
            </div>
            <div class="input-wrapper">
              <label for="people" class="input-label">Pax Number*</label>
              <input type="number" name="people" id="people" required placeholder="No.of People" class="input-field">
            </div>
            <div class="input-wrapper">
              <label for="checkin" class="input-label">Checkin Date**</label>
              <input type="date" name="checkin" id="checkin" required class="input-field">
            </div>
            <div class="input-wrapper">
              <label for="checkout" class="input-label">Checkout Date*</label>
              <input type="date" name="checkout" id="checkout" required class="input-field">
            </div>
            <button type="submit" class="btn btn-secondary">Inquire now</button>
          </form>
        </div>
        <div id="flight-list" class="flight-list" style="display: none;">
          <h2 class="flight-list-title">Available Flights</h2>
          <table class="flight-table">
            <tr>
              <th class="flight-table-header">Flight Number</th>
              <th class="flight-table-header">Departure</th>
              <th class="flight-table-header">Destination</th>
              <th class="flight-table-header">Departure Date</th>
              <th class="flight-table-header">Departure Time</th>
            </tr>
            <!-- The flights will be added here dynamically through JavaScript -->
          </table>
        </div>
      </section>
      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">

          <p class="section-subtitle">Uncover place</p>

          <h2 class="h2 section-title">Popular destination</h2>

          <p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p>

          <ul class="popular-list">
            <?php $displayLimit = 3; ?>
            <?php foreach ($destinations as $index => $destination) { ?>
              <li <?php if ($index >= $displayLimit) {
                echo 'style="display: none;"';
              } ?>>
                <div class="popular-card">
                  <figure class="card-img">
                    <img src="<?php echo $destination['link']; ?>"
                      alt="<?php echo $destination['destination'] . ', ' . $destination['country']; ?>" loading="lazy">
                  </figure>
                  <div class="card-content">
                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>
                    <p class="card-subtitle">
                      <a href="destination_detail.php?country=<?php echo urlencode($destination['country']); ?>">
                        <?php echo $destination['country']; ?>
                      </a>
                    </p>
                    <h3 class="h3 card-title">
                      <a href="destination_detail.php?country=<?php echo urlencode($destination['country']); ?>">
                        <?php echo $destination['destination']; ?>
                      </a>
                    </h3>
                    <p class="card-text">
                      <?php echo $destination['description']; ?>
                    </p>
                  </div>
                </div>
              </li>
            <?php } ?>
          </ul>
          <button class="btn btn-primary" id="moreButton">More destination</button>


        </div>
      </section>





      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          <p class="section-subtitle">Popular Packeges</p>

          <h2 class="h2 section-title">Checkout Our Packeges</h2>

          <p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p>

          <?php
          $displayLimit = 5; // Number of packages to initially display
          $totalPackages = count($travel_packages); // Total number of packages
          
          // Slice the array to get the first $displayLimit packages
          $displayedPackages = array_slice($travel_packages, 0, $displayLimit);
          ?>

          <ul class="package-list">
            <?php foreach ($displayedPackages as $package) { ?>
              <li>
                <div class="package-card">
                  <figure class="card-banner">
                    <img src="<?php echo $package['image_link']; ?>" alt="<?php echo $package['image_alt_attribute']; ?>"
                      loading="lazy">
                  </figure>
                  <div class="card-content">
                    <h3 class="h3 card-title">
                      <?php echo $package['card_title']; ?>
                    </h3>
                    <p class="card-text">
                      <?php echo $package['card_description']; ?>
                    </p>
                    <ul class="card-meta-list">
                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="time"></ion-icon>
                          <p class="text">
                            <?php echo $package['duration']; ?>
                          </p>
                        </div>
                      </li>
                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="people"></ion-icon>
                          <p class="text">
                            <?php echo $package['number_of_guests']; ?>
                          </p>
                        </div>
                      </li>
                      <li class="card-meta-item">
                        <div class="meta-box">
                          <ion-icon name="location"></ion-icon>
                          <p class="text">
                            <?php echo $package['destination']; ?>
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="card-price">
                    <div class="wrapper">
                      <p class="reviews">
                        <?php echo $package['number_of_reviews']; ?>
                      </p>
                      <div class="card-rating">
                        <?php
                        // Assuming the card_rating value represents the number of stars
                        $stars = intval($package['card_rating']);
                        for ($i = 0; $i < $stars; $i++) {
                          echo '<ion-icon name="star"></ion-icon>';
                        }
                        ?>
                      </div>
                    </div>
                    <p class="price">
                      <?php echo '$' . $package['price_per_person']; ?>
                      <span>/ per person</span>
                    </p>
                    <button class="btn btn-secondary">Book Now</button>
                  </div>
                </div>
              </li>
            <?php } ?>
          </ul>

          <?php if ($totalPackages > $displayLimit) { ?>
            <button class="btn btn-primary" id="viewAllButton">View All Packages</button>

            <!-- Include jQuery library -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

            <script>
              $(document).ready(function () {
                const displayLimit = <?php echo $displayLimit; ?>;
                const totalPackages = <?php echo $totalPackages; ?>;

                // Function to show all packages when the button is clicked
                function showAllPackages() {
                  $(".package-list li").slideDown();
                  $("#viewAllButton").hide(); // Hide the button after showing all packages
                }

                // Hide packages beyond the initial display limit
                $(".package-list li:gt(" + (displayLimit - 1) + ")").hide();

                // Toggle the visibility of packages on "View All Packages" button click
                $("#viewAllButton").on("click", function () {
                  showAllPackages();
                });
              });
            </script>
          <?php } ?>
        </div>
      </section>

      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
        <div class="container">

          <p class="section-subtitle">Photo Gallery</p>

          <h2 class="h2 section-title">Photo's From Travellers</h2>

          <p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p>

          <ul class="gallery-list">

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-1.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-2.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-3.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-4.jpg" alt="Gallery image">
              </figure>
            </li>

            <li class="gallery-item">
              <figure class="gallery-image">
                <img src="./assets/images/gallery-5.jpg" alt="Gallery image">
              </figure>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Call To Action</p>

            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>

            <p class="section-text">
              Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
              laudantium. Sit ornare
              mollitia tenetur, aptent.
            </p>
          </div>

          <button class="btn btn-secondary">Contact Us !</button>

        </div>
      </section>

    </article>
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
            <a href="admin.php" class="footer-bottom-link">Admin Page</a>
          </li>

        </ul>`

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
<?php
if (isset($_GET['destination']) && isset($_GET['country']) && isset($_GET['short_description']) && isset($_GET['image_link']) && isset($_GET['image_link2']) && isset($_GET['image_link3']) && isset($_GET['image_link4']) && isset($_GET['image_link5'])) {
    $destination = $_GET['destination'];
    $country = $_GET['country'];
    $short_description = $_GET['short_description'];
    $image_link = $_GET['image_link'];
    $image_link2 = $_GET['image_link2'];
    $image_link3 = $_GET['image_link3'];
    $image_link4 = $_GET['image_link4'];
    $image_link5 = $_GET['image_link5'];
} 
// else {
//     // If the necessary destination details are not provided, redirect back to the homepage or display an error message.
//     header('Location: index.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include the necessary meta tags, stylesheets, and scripts here -->
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
    <!-- ... -->
</head>

<body>
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
    <!-- Display the destination and country information here -->
    <?php
if (isset($_GET['destination']) && isset($_GET['country'])) {
    $destination = $_GET['destination'];
    $country = $_GET['country'];
    $short_description = $_GET['short_description'];
    $image_link = $_GET['image_link'];
} else {
    // If the destination and country are not provided, redirect back to the homepage or display an error message.
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include the necessary meta tags, stylesheets, and scripts here -->
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
    <!-- ... -->
</head>

<body>
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
    <!-- Display the destination and country information here -->
    <section style="padding-top: 144px;" class="hero">

        <div class="booking_form_container">
        <h2><?php echo $destination . ', ' . $country; ?></h2>
            <p><?php echo $short_description; ?></p>

            <div class="image_gallery">
                <img src="<?php echo $image_link; ?>" alt="Image 1">
                <img src="<?php echo $image_link2; ?>" alt="Image 2">
                <img src="<?php echo $image_link3; ?>" alt="Image 3">
                <img src="<?php echo $image_link4; ?>" alt="Image 4">
                <img src="<?php echo $image_link5; ?>" alt="Image 5">
            </div>

            <p>Price: $240/night</p>

            <!-- Booking form -->
            <form action="process_booking.php" method="post">
                <!-- Input fields for address and payment information -->
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" required>

                <label for="payment">Payment Details:</label>
                <input type="text" name="payment" id="payment" required>

                <!-- Additional input fields can be added as needed -->

                <button type="submit">Submit Booking</button>
            </form>
        </div>

    </section>

</body>

</html>

</body>

</html>
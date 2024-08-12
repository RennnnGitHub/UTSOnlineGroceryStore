<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>UTS Online Grocery Store</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

  <style>
    .search_box {
      margin-left: 20px;
    }

    .search_box form {
      display: flex;
      align-items: center;
    }

    .search_box input[type="text"] {
      height: 38px;
      border-radius: 20px;
      border: 1px solid #ced4da;
      padding: 5px 10px;
      margin-right: 10px;
      outline: none;
    }

    .search_box button {
      height: 38px;
      border-radius: 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 0 15px;
      cursor: pointer;
    }

    .search_box button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- Header Section -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              <img src="images/LogoUts.png" a href="index.php" width="125" height="75" href />
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php"> Products </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.php"> About <span class="sr-only">(current)</span> </a>
              </li>
            </ul>
            <div class="user_option-box">
              <a href="">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a href="cart.php">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
              </a>
              <div class="search_box">
                <form action="product_display.php" method="GET">
                  <input type="text" name="query" placeholder="Search products...">
                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Header Section -->
  </div>

  <!-- About Section -->
  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="row">
        <div class="col-md-6 col-lg-5 ">
          <div class="img-box">
            <img src="images/LogoUts.png" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
            At UTS Online Grocery Store, we're passionate about delivering convenience and quality right to your doorstep. Our journey began with a simple idea: to make grocery shopping easier and more enjoyable for everyone. With a commitment to freshness and customer satisfaction, we've curated a wide selection of products ranging from farm-fresh produce to pantry staples and gourmet delights.
            <br>

            <br>
            Driven by a dedication to excellence, we strive to provide a seamless online shopping experience that saves you time and effort. Our user-friendly platform allows you to browse, select, and purchase your favorite items with ease, all from the comfort of your home.
            <br>

            <br>
            But our mission goes beyond just delivering groceries – we're here to make a difference in your daily life. Whether it's ensuring the freshness of our products, offering convenient delivery options, or providing exceptional customer service, we're always working to exceed your expectations.
            <br>
            
            <br>
            Join us on this journey and experience the convenience, quality, and reliability that UTS Online Grocery Store has to offer. Thank you for choosing us as your trusted partner in grocery shopping.
            <br>

            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section -->

  <!-- Footer Section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_detail">
            <h4>
              About
            </h4>
            <p>
              What are you waiting for?
            </p>
            <div class="footer_social">
              <a href="https://www.facebook.com/zuck/">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://x.com/elonmusk">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
                <a href="https://www.instagram.com/woolworths_au/?hl=en">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Reach at..
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Treasury Tower,Jl. Jend. Sudirman Kav. 52-54, SCBD Jakarta Selatan 12190. Indonesia 021-150 350
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call 0-400-300-000
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  UTSGrocery@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 footer-col">
          <div class="footer_contact">
            <h4>
              Subscribe
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit" ahref="">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
      <div class="footer-info">
        <p>
        <span id="displayYear"></span> UTS Grocery Store Ltd. 2024
        </p>
      </div>
    </div>
  </footer>
  <!-- Footer Section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>

</body>

</html>

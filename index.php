<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/LogoUts.png" type="image/x-icon">

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

<body>

  <div class="hero_area">
    <div class="hero_social">
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
    <!-- Header Section -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
            <img src="images/LogoUts.png" a href="index.php" width="125" height = "75" href/>
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php"> Products </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
            </ul>
            <div class="user_option-box">
              <!-- Search Box -->
              <div class="search_box">
                <form action="product_display.php" method="GET">
                  <input type="text" name="query" placeholder="Search products...">
                  <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </div>
              <!-- Search Box -->
              <a href="">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a href="cart.php">
                <i class="fa fa-cart-plus" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Header Section -->
    <!-- Slider Section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      UTS Online Grocery Store
                    </h1>
                    <p>
                    Welcome to UTS Online Grocery Store, where convenience meets quality right at your fingertips! Step into a world of fresh produce, pantry essentials, and gourmet delights, all available at your convenience. Say goodbye to long queues and heavy bags – with just a few clicks, your groceries will be on their way to your doorstep. Whether you're stocking up on essentials or searching for something special, UTS Online Grocery Store has you covered. Start your hassle-free shopping journey today and discover the ease of online grocery shopping with UTS!
                    </p>
                    <div class="btn-box">
                      <a href="product.php" class="btn1">
                        Shop Now
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/LogoUts.png" alt="" height = "500" width = "150">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Featured Product
                    </h1>
                    <p>
                    Introducing our irresistible Fish Fingers – crispy on the outside, tender on the inside! Made from premium-quality fish fillets, our Fish Fingers are perfect for a quick and delicious meal or snack. Whether you're serving them up for the family or hosting a casual gathering, these golden-brown delights are sure to be a hit. Dive into flavor with UTS Online Grocery Store's Fish Fingers – your convenient solution for a tasty seafood treat!
                    </p>
                    <div class="btn-box">
                      <a href="product.php" class="btn1">
                        Buy Now!
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/FishFingers.png" alt="" height = "500" width = "150">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      What are you waiting for?
                    </h1>
                    <p>
                    Hurry, stock up on our mouthwatering Fish Fingers now before they swim away! Click 'Buy Now' to secure your crispy, delicious treat while supplies last!
                    </p>
                    <div class="btn-box">
                      <a href="product.php" class="btn1">
                        Buy Now!
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/smiley-face-poster.png" alt="" height = "500" width = "150">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- Slider Section -->
  </div>

  <!-- Info Section -->
  <section class="info_section layout_padding ">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_contact">
            <h5>
              Address
            </h5>
            <div class="info_location">
              <p>
               Treasury Tower,Jl. Jend. Sudirman Kav. 52-54, SCBD Jakarta Selatan 12190. Indonesia 021-150 350.
              </p>
              <p>
                UTSGrocery@gmail.com
              </p>
              <p>
                0-400-300-000
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_logo">
            <img src="" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_social">
            <div>
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
      </div>
    </div>
  </section>
  <!-- Info Section -->

  <!-- Footer Section -->
  <footer class="footer_section ">
    <div class="container">
      <p>
      <span id="displayYear"></span> UTS Grocery Store Ltd. 2024
      </p>
    </div>
  </footer>
  <!-- Footer Section -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>

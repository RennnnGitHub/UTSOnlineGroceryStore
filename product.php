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
    .product_box {
      border: 1px solid #ddd; 
      border-radius: 8px; 
      padding: 15px; 
      margin: 10px; 
    }

    .product_image {
      width: 100%; 
      border-radius: 8px; 
    }

    .product_container {
      display: grid;
      grid-template-columns: repeat(5, 1fr); 
      grid-gap: 20px;
    }

    .search_form {
      margin-bottom: 20px;
    }

    .search_form input[type="text"] {
      width: 300px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    .search_button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

    .search_button i {
      margin-right: 5px;
    }

    .category_filter select {
      width: 150px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
    }

    .add_to_cart_button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .add_to_cart_button.disabled {
      background-color: #ccc; 
      color: #666; 
      cursor: not-allowed; 
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
              <img src="images/LogoUts.png" alt="UTS Online Grocery Store" width="125" height="75">
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="product.php">Products <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
            </ul>
            <div class="user_option-box">
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
  </div>

  <!-- Shop Section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Latest Products</h2>
      </div>
      <!-- Add the category dropdown menu -->
      <div class="category_filter">
        <form action="product.php" method="POST">
          <select id="category" name="category">
            <option value="">All Categories</option>
            <option value="Frozen">Frozen</option>
            <option value="Fresh">Fresh</option>
            <option value="Beverages">Beverages</option>
            <option value="Home">Home</option>
            <option value="Pet-food">Pet-food</option>
          </select>
          <button type="submit" class="filter_button">Filter</button>
        </form>
      </div>

      <!-- Search Form -->
      <form action="product.php" method="GET" class="search_form">
        <input type="text" name="query" placeholder="Search for products...">
        <button type="submit" class="search_button"><i class="fa fa-search"></i>Search</button>
      </form>
      <div class="product_container">
        <?php
        // Include the PHP code to display products based on the selected category
        include 'product_display.php';
        ?>
      </div>
    </div>
  </section>
  <!-- Shop Section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
    </div>
  </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>

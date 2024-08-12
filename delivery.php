<?php
// Start the session
session_start();

// Check if the delivery form is submitted
if(isset($_POST['delivery_submit'])) {
    // Check if the cart session variable is set
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        // Redirect the user to the shopping cart page
        header("Location: cart.php");
        exit(); // Stop further execution
    }

    // Database connection parameters
    $servername = "awseb-e-rjp9av7b7v-stack-awsebrdsdatabase-87xe6bocwsul.cxc8ua0egp76.us-east-1.rds.amazonaws.com";
    $username = "uts";
    $password = "passwordis12345";
    $dbname = "assignment1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Initialize variable to track if any product is out of stock
    $out_of_stock = false;

    // Loop through each item in the cart to check stock availability
    foreach ($_SESSION['cart'] as $key => $product) {
        $product_id = $product['product_id'];
        // Query to check stock availability from the database
        $sql = "SELECT in_stock FROM products WHERE product_id = '$product_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row['in_stock'] == 0) {
                // Set out_of_stock flag to true if any product is out of stock
                $out_of_stock = true;
                break; 
            }
        }
    }

    // Close database connection
    $conn->close();

    // If any item is out of stock, redirect back to cart.php
    if ($out_of_stock) {
        // Redirect the user to the shopping cart page with an error message
        header("Location: cart.php?error=out_of_stock");
        exit(); // Stop further execution
    } else {
        // If all items are in stock, proceed to the delivery process
        header("Location: confirmation.php");
        exit(); // Stop further execution
    }
}

// Check if the error message for out of stock is present in the URL
if (isset($_GET['error']) && $_GET['error'] === 'out_of_stock') {
    ?>
    <script>
        alert("Sorry, this item has run out of stock.");
    </script>
    <?php
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <style>
        .custom_nav-container {
            background-color: #fff; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        }
        .custom_nav-container .navbar-nav .nav-link {
            color: #000; 
        }
        .custom_nav-container .navbar-nav .nav-link:hover {
            color: #007bff; 
        }
        .delivery_form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .delivery_form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .delivery_form input[type="text"],
        .delivery_form input[type="tel"],
        .delivery_form input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .delivery_form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .delivery_form input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .delivery_form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
      <!-- Header Section -->
      <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.php">
                    <span>
                        <img src="images/LogoUts.png" alt="UTS Online Grocery Store" width="125" height="75">
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

    <div class="delivery_form">
        <h2>Delivery Information</h2>
        <form action="delivery.php" method="post">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="street">Street:</label>
            <input type="text" id="street" name="street" required>

            <label for="city">City/Suburb:</label>
            <input type="text" id="city" name="city" required>

            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option value="">Select State</option>
                <option value="NSW">New South Wales</option>
                <option value="VIC">Victoria</option>
                <option value="QLD">Queensland</option>
                <option value="WA">Western Australia</option>
                <option value="SA">South Australia</option>
                <option value="ACT">Australian Capital Territory</option>
                <option value="NT">Northern Territory</option>
                <option value="Others">Others</option>
            </select>

            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="e.g., 1234567890" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Submit" name="delivery_submit">
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>

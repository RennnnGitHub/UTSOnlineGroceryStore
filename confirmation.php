<?php
session_start();

// Check if the cart session variable is set and not empty
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    // Redirect to a page indicating that the cart is empty or handle it in some way
    header("Location: cart.php");
    exit;
}

// Connect to your database
$servername = "awseb-e-rjp9av7b7v-stack-awsebrdsdatabase-87xe6bocwsul.cxc8ua0egp76.us-east-1.rds.amazonaws.com";
$username = "uts";
$password = "passwordis12345";
$dbname = "assignment1";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Save the cart items in a separate variable before clearing the cart
$orderDetails = $_SESSION['cart'];

// Loop through the items in the cart and update the quantities in the database
foreach ($orderDetails as $product) {
    $productId = $product['id'];
    $quantity = $product['quantity'];

    // Update the quantity of the product in the database
    $sql = "UPDATE products SET in_stock = in_stock - $quantity WHERE product_id = $productId";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();

// Clear the cart after saving the order details
$_SESSION['cart'] = [];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Information</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
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

        .confirmation_message {
            text-align: center;
            margin-top: 50px;
        }

        .invoice_option {
            text-align: center;
            margin-top: 20px;
        }

        .invoice_option button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-family: 'Arial', sans-serif;
            font-size: 16px;
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

    <div class="container">
        <div class="confirmation_message">
            <h2>Your order has been confirmed</h2>
        </div>

        <div class="order_details">
    <h3>Order Details:</h3>
    <ul>
        <?php foreach ($orderDetails as $key => $product) : ?>
            <li>
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="100"> 
                <strong><?php echo $product['name']; ?></strong>
                <span>Quantity: <?php echo $product['quantity']; ?></span>
                <span>Price: <?php echo number_format($product['price'] * $product['quantity'], 2); ?></span> 
            </li>
        <?php endforeach; ?>
    </ul>
</div>

        <div class="invoice_option">
            <p>Would you like to receive the invoice by email?</p>
            <form action="#" method="post">
                <label for="email">Enter your email:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Send Invoice</button>
            </form>
        </div>
    </div>
    <!-- Header Section -->

</body>
</html>

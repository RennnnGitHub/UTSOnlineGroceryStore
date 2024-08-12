<?php
// Set session cookie parameters
session_set_cookie_params(0, '/', '', false, true);

// Start sesion
session_start();

// Check if cart session variable is not set, if empty - initialize
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Initialize total price
$total_price = 0;

// Check if form for adding to cart is submitted already
if (isset($_POST['add_to_cart'])) {
    // Check if all product details are set
    if (isset($_POST['product_id'], $_POST['product_name'], $_POST['product_price'], $_POST['product_image'], $_POST['product_quantity'])) {
        // Retrieve product details from the form submission
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = $_POST['product_quantity'];

        // Check if product is already in the cart, if yes, update quantity
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity'] += 1;
        } else {
            // If the product is not cart, add product
            $_SESSION['cart'][$product_id] = [
                'id' => $product_id,
                'name' => $product_name, // Corrected key name
                'price' => $product_price, // Corrected key name
                'image' => $product_image,
                'quantity' => 1, // Initial quantity is 1
            ];
            // Product Added Successfully message to user
            echo '<script>';
            echo 'alert("Product Added Successfully");'; // Display prompt
            echo '</script>';
        }
    }
}

// Check if remove button is clicked
if (isset($_POST['remove_from_cart'])) {
    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);
}

// Check if the form for updating quantity
if (isset($_POST['update_quantity'])) {
    // Check if all necessary details are set
    if (isset($_POST['product_id'], $_POST['new_quantity'])) {
        $product_id = $_POST['product_id'];
        $new_quantity = $_POST['new_quantity'];
        // Update cart quantity
        $_SESSION['cart'][$product_id]['quantity'] = $new_quantity;
    }
}

// Check if the form for increasing quantity
if (isset($_POST['increase_quantity'])) {
    // Check if all necessary details are set
    if (isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];
        // Increase quantity in cart
        $_SESSION['cart'][$product_id]['quantity'] += 1;
    }
}

// Check if the form for decreasing quantity is submitted
if (isset($_POST['decrease_quantity'])) {
    // Check if all necessary details are set
    if (isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];
        // Decrease  quantity in the cart, but it cannot go lower than 1
        if ($_SESSION['cart'][$product_id]['quantity'] > 1) {
            $_SESSION['cart'][$product_id]['quantity'] -= 1;
        }
    }
}

// Handle clear cart function
if (isset($_POST['clear_cart'])) {
    $_SESSION['cart'] = [];
}
?>
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

        .cart_item {
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 15px;
            display: flex;
        }

        .cart_item img {
            max-width: 100px;
            margin-right: 20px;
        }

        .cart_item .product_details {
            flex-grow: 1;
        }

        .cart_item .remove_from_cart_button {
            margin-top: 10px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .cart_item .remove_from_cart_button:hover {
            background-color: #bd2130;
        }

        .quantity_control {
            display: flex;
            align-items: center;
        }

        .quantity_button {
            align-items: right;
            border: none;
            background: none;
            cursor: pointer;
        }

        .quantity_input {
            width: 50px;
            text-align: center;
        }

        .clear_cart_button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .clear_cart_button:hover {
            background-color: #bd2130;
            margin-bottom: 10px;
        }

        .checkout_button {
            margin-top: 10px; 
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-family: 'Arial', sans-serif;
            font-size: 16px;
        }

        .checkout_button.disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }

        .clear_cart_button:hover,
        .checkout_button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <!-- Header Section  -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
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
    <!-- Header Section  -->

    <!-- Cart Section -->
    <section class="cart_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>Shopping Cart</h2>
            </div>
            <div class="cart_items">
                <?php
                // Check if  cart is empty
                if (empty($_SESSION['cart'])) {
                    echo '<div class="empty_cart_placeholder">';
                    echo '<p>There are no items in the cart.</p>';
                    echo '</div>';
                } else {
                    // Loop through each product in the cart and then display it
                    foreach ($_SESSION['cart'] as $key => $product) {
                        echo '<div class="cart_item">';
                        echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                        echo '<div class="product_details">';
                        echo '<h3 class="product_name">' . $product['name'] . '</h3>';
                        echo '<p class="product_price">$' . $product['price'] . '</p>';
                        // Check if quantity key is set before accessing it
                        if (isset($product['quantity'])) {
                            echo '<p class="product_quantity">Quantity: ' . $product['quantity'] . '</p>';
                        }
                        echo '</div>';
                        // Add form for removing product from cart and updating quantity
                        echo '<form action="" method="post">';
                        echo '<input type="hidden" name="product_id" value="' . $product['id'] . '">';
                        echo '<div class="quantity_control">';
                        echo '<button type="submit" name="decrease_quantity" class="quantity_button decrease_button">-</button>'; // Button to decrease quantity
                        echo '<input type="number" name="new_quantity" class="quantity_input" value="' . $product['quantity'] . '" readonly>'; // Input field to display quantity
                        echo '<button type="submit" name="increase_quantity" class="quantity_button increase_button">+</button>'; // Button to increase quantity
                        echo '</div>';
                        echo '<button type="submit" name="remove_from_cart" class="remove_from_cart_button">Remove from Cart</button>';
                        echo '</form>';
                        echo '</div>';
                        // Check if 'quantity' key is set before calculating subtotal
                        if (isset($product['quantity'])) {
                            // Calculate subtotal for this product
                            $subtotal = $product['price'] * $product['quantity'];
                            $total_price += $subtotal;
                        }
                    }
                }
                ?>
            </div>
            <div class="cart_total">
                <h3>Total: $<?php echo number_format($total_price, 2); ?></h3>
                <!-- Clear Cart -->
                <form action="" method="post">
                    <button type="submit" name="clear_cart" class="clear_cart_button">Clear Cart</button>
                </form>
                <!-- Checkout Button -->
                <?php if (!empty($_SESSION['cart'])) : ?>
                    <form action="delivery.php" method="post">
                        <button type="submit" name="checkout" class="checkout_button">Checkout</button>
                    </form>
                <?php else : ?>
                    <button class="checkout_button disabled" style="background-color: #ccc; cursor: not-allowed;">Checkout</button>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <!-- Cart Section -->

    <!-- Info Section -->
    <section class="info_section layout_padding ">
        <div class="container">
        </div>
    </section>
    <!-- Info Section -->

    <!-- Footer Section -->
    <footer class="footer_section ">
        <div class="container">
        </div>
    </footer>
    <!-- Footer Section -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>

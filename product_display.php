<?php
// Database connection parameters
$servername = "localhost ";
$username = "root";
$password = "";
$dbname = "assignment1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize category filter variable
$category_filter = '';

// Check if a category is selected
if (isset($_POST['category'])) {
    $category_filter = $conn->real_escape_string($_POST['category']);
}

// Initialize search query variable
$search_query = '';

// Check if there is a search query
if (isset($_GET['query'])) {
    $search_query = $conn->real_escape_string($_GET['query']);
}

// SQL query to retrieve products based on the selected category and search query
$sql = "SELECT * FROM products";

// Add WHERE clause to filter products based on category and search query
if (!empty($category_filter) && !empty($search_query)) {
    $sql .= " WHERE category = '$category_filter' AND product_name LIKE '%$search_query%'";
} elseif (!empty($category_filter)) {
    $sql .= " WHERE category = '$category_filter'";
} elseif (!empty($search_query)) {
    $sql .= " WHERE product_name LIKE '%$search_query%'";
}

$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Display product information
        echo "<div class='product_box'>";
        echo "<h4>" . $row["product_name"] . "</h4>";
        echo "<img class='product_image' src='" . $row["image_url"] . "' alt='" . $row["product_name"] . "'>";
        echo "<p>Price: $" . $row["unit_price"] . "</p>";
        echo "<p>Quantity: " . $row["unit_quantity"] . "</p>";
        echo "<p>In Stock: " . ($row["in_stock"] > 0 ? "Available" : "Unavailable") . "</p>";
        // Add form for adding to cart
        echo "<form action='cart.php' method='POST'>";
        echo "<input type='hidden' name='product_id' value='" . $row['product_id'] . "'>";
        echo "<input type='hidden' name='product_name' value='" . $row['product_name'] . "'>";
        echo "<input type='hidden' name='product_price' value='" . $row['unit_price'] . "'>";
        echo "<input type='hidden' name='product_image' value='" . $row['image_url'] . "'>";
        echo "<input type='hidden' name='product_quantity' value='" . $row['unit_quantity'] . "'>";
        if ($row["in_stock"] > 0) {
            echo "<button type='submit' name='add_to_cart' class='add_to_cart_button'>Add to Cart</button>";
        } else {
            echo "<button type='button' class='add_to_cart_button disabled' disabled>Add to Cart</button>";
        }
        echo "</form>";
        echo "</div>";
    }
} else {
    echo "Product Not Found";
}

// Close database connection
$conn->close();
?>

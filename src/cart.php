<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Acme Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Shopping Cart</h1>
    </header>
    <main>
        <section id="cart">
            <h2>Your Shopping Cart</h2>
            <?php
            // Check if product ID and quantity are set in the URL
            if(isset($_GET['product_id']) && isset($_GET['quantity'])) {
                $productId = $_GET['product_id'];
                $quantity = $_GET['quantity'];

                // Get the product details based on the product ID
                $productDetails = getProductDetails($productId);
                if($productDetails !== null) {
                    echo "<div class='product'>";
                    echo "<h3>{$productDetails['name']}</h3>"; // Product name
                    echo "<p>Quantity: $quantity</p>"; // Quantity
                    echo "<p>Price: $ {$productDetails['price']}</p>"; // Price
                    echo "</div>";
                } else {
                    echo "<p>Product not found!</p>";
                }
            } else {
                echo "<p>Your shopping cart is currently empty. Start adding items <a href='catalog.php'>here</a>.</p>";
            }

            // Function to get product details based on product ID
            function getProductDetails($productId) {
                // Define an array of products with their details
                $products = [
                    [
                        'name' => 'Anvil',
                        'description' => 'A heavy metal anvil perfect for all your cartoonish needs!',
                        'price' => 49.99,
                        'image' => 'anvil.jpg',
                    ],
                    [
                        'name' => 'Axle Grease',
                        'description' => 'Keeps your axles running smoothly!',
                        'price' => 19.99,
                        'image' => 'axle_grease.jpg',
                    ],
                    // Add more products here
                ];

                // Find the product with the given ID
                foreach ($products as $product) {
                    if ($product['name'] == $productId) {
                        return $product;
                    }
                }
                return null; // Return null if product not found
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Acme Store. All rights reserved.</p>
    </footer>
</body>
</html>

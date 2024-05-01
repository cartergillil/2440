<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - Acme Store</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .product-description {
            display: none;
        }
        .product button {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Product Details</h1>
    </header>
    <main>
        <section id="product-details">
            <div id="product-list">
                <?php
                // Define an array of products with their details
                $products = array(
                    array("Anvil", "A heavy metal anvil perfect for all your cartoonish needs!", 49.99),
                    array("Axle Grease", "Keeps your axles running smoothly!", 19.99),
                    array("Atom Re-Arranger", "Rearrange atoms at your whim!", 999.99),
                    array("Bed Springs", "Durable springs for your bed!", 29.99),
                    array("Bird Seed", "High-quality bird seed for all your feathery friends!", 9.99), 
                    array("Blasting Powder", "Explosive powder for blasting!", 99.99),
                    array("Cork", "Natural cork material!", 3.99),
                    array("Disintegration Pistol", "Pistol with disintegration capabilities!", 499.99), // New product
                    array("Earthquake Pills", "Pills that simulate earthquakes!", 19.99),
                    array("Female Roadrunner costume", "Costume to dress up as a female roadrunner.", 59.99),
                    array("Giant Rubber Band", "Extra large rubber band.", 7.99),
                    array("Instant Girl", "Create a girl instantly with this device.", 1999.99),
                    array("Iron Carrot", "A carrot made of iron.", 14.99),
                    array("Jet Propelled Unicycle", "Unicycle with a jet engine.", 299.99),
                    array("Out-Board Motor", "Motor for use outside of the water.", 129.99),
                    array("Railroad Track", "Straight railroad track segment.", 89.99),
                    array("Rocket Sled", "Sled propelled by rockets.", 499.99),
                    array("Super Outfit", "Outfit with superpowers.", 399.99),
                    array("Time Space Gun", "Gun that manipulates time and space.", 899.99),
                    array("X-Ray", "Device to see through objects.", 199.99)
                    // Add more products here
                );

                // Loop through the products and generate HTML for each
                foreach ($products as $index => $product) {
                    $productId = $index + 1; // Increment by 1 to match IDs starting from 1
                    echo "<div class='product' data-product-id='$productId'>";
                    echo "<h2>{$product[0]}</h2>"; // Product name
                    echo "<img src='$productId.jpg' alt='{$product[0]}'>"; // Product image
                    echo "<p>{$product[1]}</p>"; // Product description
                    echo "<p>Price: $ {$product[2]}</p>"; // Product price
                    echo "<input type='number' value='1' min='1' class='quantity' style='width: 50px;'>";
                    echo "<button onclick='addToCart($productId, {$product[2]})'>Add to Cart</button>"; // Add to Cart button
                    echo "</div>";
                }
                ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Acme Store. All rights reserved.</p>
    </footer>

    <script>
        function addToCart(productId, price) {
            var quantity = parseInt(document.querySelector('.product[data-product-id="' + productId + '"] .quantity').value);
            // Redirect to cart page with product ID and quantity as URL parameters
            window.location.href = "cart.php?product_id=" + productId + "&quantity=" + quantity;
        }
    </script>
</body>
</html>

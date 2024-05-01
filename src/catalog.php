<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Catalog - Acme Store</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Style for product display */
        .product-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }

        .product-container:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .product-container h2 {
            margin-top: 0;
            font-size: 1.5rem;
            color: #333;
        }

        .product-container img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .product-container p {
            margin-bottom: 10px;
        }

        .product-container a {
            display: inline-block;
            padding: 8px 16px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .product-container a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>Product Catalog</h1>
    </header>
    <main>
        <?php
        session_start();
        include 'products.php';

        // Display products
        foreach ($products as $key => $product) {
            echo "<div class='product-container'>";
            echo "<h2>{$product['name']}</h2>";
            echo "<img src='{$product['image']}' alt='{$product['name']}'><br>";
            echo "Price: \${$product['price']}<br>";
            echo "<a href='product.php?id=$key'>View Product Details</a>";
            echo "</div>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2024 Acme Store. All rights reserved.</p>
    </footer>
</body>
</html>

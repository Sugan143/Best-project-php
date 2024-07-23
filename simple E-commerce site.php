// Create a new PHP file (e.g., shop.php)
$products = array(
    array('name' => 'Product 1', 'price' => 10),
    array('name' => 'Product 2', 'price' => 20)
);
?>
<h1>Shop</h1>
<ul>
    <?php foreach ($products as $product) { ?>
        <li>
            <?php echo htmlspecialchars($product['name']); ?> - $<?php echo htmlspecialchars($product['price']); ?>
            <form method="POST" action="cart.php">
                <input type="hidden" name="product" value="<?php echo htmlspecialchars($product['name']); ?>">
                <button type="submit">Add to Cart</button>
            </form>
        </li>
    <?php } ?>
</ul>
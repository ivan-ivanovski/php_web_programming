<?php
require_once "templates/header.php";
$product=getProductById($_GET['id']);

?>
    <div class="container mx-0">
        <h1>Basic Product Management System</h1>
        <p>Simple web application build with PHP and SQLite3</p>
        <p>Single product view</p>
    </div>
    <div class="container mx-0">
        <div class="bg-white">
            <img src="<?=$product["image_url"];?>" width="400px" height="400px">
        </div>
        <h3><?=$product['product_name']?></h3>
        <textarea readonly rows="5" class="form-control" style="max-width: 300px;resize: none">Description:<?=$product['product_notes']?></textarea>
        <h5>Quantity: <?=$product['product_qty']?></h5>
        <h5>Price: $<?=$product['product_price']?></h5>
        <a href="#" class="btn btn-outline-danger">Buy now</a>
        <a href="products.php" class="d-block text-primary nav-link text-decoration-none"> View other products</a>
    </div>
<?php require_once "templates/footer.php"; ?>

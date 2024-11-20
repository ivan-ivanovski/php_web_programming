<?php require_once "templates/header.php"?>

    <div class="container mx-0">
        <h1>Basic Product Management System</h1>
        <p>Simple web application build with PHP and SQLite3</p>
        <p>Type of w.a where admin can do basic CRUD application and end client or customer can view all current products in shop, view single and add to cart.</p>
        <p class="puc">Customers choice</p>
    </div>

    <div class="container-fluid d-flex flex-row justify-content-start align-content-start flex-wrap mx-0 gap-3">
        <?php foreach ($products as $product):?>
                <?php if($product["image_url"]!=""):?>
                <div class="card productItem">
                    <div class="card-body">
                        <div class="bg-white">
                            <img src="<?=$product["image_url"];?>" width="100%">
                        </div>
                        <p><?=$product['product_name']?></p>
                        <p><?=$product['product_price']?></p>
                        <p><?=$product['product_notes']?></p>
                        <a href="singleProduct.php?id=<?=$product['id']?>" class="btn btn-dark">More</a>
                        <a href="#" class="btn btn-dark">Add</a>
                    </div>
                </div>
                <?php endif;?>
        <?php endforeach;?>
    </div>

<?php require_once "templates/footer.php"; ?>

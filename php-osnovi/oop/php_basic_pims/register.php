<?php require_once "templates/header.php"; ?>
<div class="container mx-0">
    <?php if(isset($_SESSION['error']['type'])):?>
        <div class="alert alert-<?=$_SESSION['error']['type']?>">
            <h6><?=$_SESSION['error']['msg'];?></h6>
        </div>
    <?php unset($_SESSION['error']['type']);unset($_SESSION['error']['msg']); endif;?>
    <h3 class="d-block mb-3">Register as new customer</h3>
    <form action="process.register.php" method="post" autocomplete="off" class="d-flex flex-column gap-3">
        <input type="text" placeholder="First name" name="user_firstName" id="firstName" aria-label="firstName" class="form-control d-block" style="max-width: 300px" autocomplete="off">
        <input type="text" placeholder="Last name" name="user_lastName" id="lastName" aria-label="lastName" class="form-control d-block" style="max-width: 300px" autocomplete="off">
        <input type="text" placeholder="Username" name="username" id="username" aria-label="username" class="form-control d-block" style="max-width: 300px" autocomplete="off">
        <input type="email" placeholder="E-mail" name="email" id="email" aria-label="email" class="form-control d-block" style="max-width: 300px" autocomplete="off">
        <input type="password" placeholder="Password" name="password" id="password" aria-label="password" class="form-control d-block" style="max-width: 300px" autocomplete="off">
        <input type="submit" value="Register" class="btn btn-outline-primary" style="max-width: 300px">
    </form>
    <h6 class="mt-3">You have an account. Click to <a href="#login.php">login</a></h6>
</div>
<?php require_once "templates/footer.php"; ?>

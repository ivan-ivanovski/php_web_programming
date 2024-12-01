<?php
    include "../config.php";
    require_once "../templates/header.php";
    if(isset($_SESSION['userId'])){
        header('Location: ../index.php');
    }
?>
<div class="container-fluid my-3 mx-auto" style="width:478px">
    <div>
        <?php if (isset($_SESSION['msg']['success'])): ?>
            <div class="alert alert-success mt-3" role="alert">
                <?php echo htmlspecialchars($_SESSION['msg']['success']); ?>
            </div>
            <?php unset($_SESSION['msg']['success']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['msg']['danger'])): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?php echo htmlspecialchars($_SESSION['msg']['danger']); ?>
            </div>
            <?php unset($_SESSION['msg']['danger']); ?>
        <?php endif; ?>
    </div>
    <div class="card card-body" style="width: 100%;">
            <h3>Login page</h3>
            <form method="POST" style="max-width: 460px;" action="../actions/login.action.php" autocomplete="off">
                <div class="d-flex flex-row justify-content-between align-items-center mb-2">
                    <label for="username" class="w-25">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your username" class="form-control" required>
                </div>
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row justify-content-between align-items-center mb-2">
                        <label for="password" class="w-25">Password</label>
                        <input type="password" name="password" id="password" placeholder="Your password" class="form-control" required>
                    </div>
                    <p class="d-block mb-2">Don't know you password, or you have forgotten it. <a href="#../actions/password.reset.php" class="text-danger-emphasis">Reset now</a></p>
                </div>
                <div class="d-flex flex-column my-1">
                    <input type="submit" class="btn btn-outline-primary text-primary-emphasis d-block mb-2" value="Login now" style="width: 200px;">
                    <p>Still don't have account. <a href="register.page.php" class="text-danger-emphasis">Register now</a></p>
                </div>
            </form>
    </div>
</div>
<?php require_once "../templates/footer.php";?>

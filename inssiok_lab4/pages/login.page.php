<?php
    include "../config.php";
    require_once "../templates/header.php";
?>
<div class="container my-3 mx-0 justify-content-center align-items-center">
    <div class="card" style="width: 600px;">
        <div class="card-header">
            <h3>Login page</h3>
        </div>
        <div class="card-body">
            <form method="POST" style="max-width: 460px;">
                <div class="d-flex flex-row justify-content-between align-items-center mb-2">
                    <label for="username" class="w-25">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your username" class="form-control" required>
                </div>
                <div class="d-flex flex-column">
                    <div class="d-flex flex-row justify-content-between align-items-center mb-2">
                        <label for="password" class="w-25">Password</label>
                        <input type="password" name="password" id="password" placeholder="Your password" class="form-control" required>
                    </div>
                    <p class="d-block mb-2">Don't know you password or you have forgotten it. <a href="#../actions/password.reset.php" class="text-danger-emphasis">Reset now</a></p>
                </div>
                <div class="d-flex flex-column my-1">
                    <input type="submit" class="btn btn-outline-primary text-primary-emphasis d-block mb-2" value="Login now" style="width: 200px;">
                    <p>Still don't have account. <a href="register.page.php" class="text-danger-emphasis">Register now</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once "../templates/footer.php";?>

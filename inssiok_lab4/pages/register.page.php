<?php
    include "../config.php";
    require_once "../templates/header.php";
?>
    <div class="container my-3 mx-0 justify-content-center align-items-center">
        <div style="width: 600px">
            <?php if (isset($_SESSION['msg']['danger'])): ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?php echo htmlspecialchars($_SESSION['msg']['danger']); ?>
                </div>
                <?php unset($_SESSION['msg']['danger']); ?>
            <?php endif; ?>
        </div>
        <div class="card" style="width: 600px;">
            <div class="card-header">
                <h3>Register page</h3>
            </div>
            <div class="card-body">
                <form action="../actions/register.action.php" method="POST" style="width: auto;" autocomplete="off">
                    <div class="d-flex flex-row justify-content-between align-items-center mb-2">
                        <label for="first_name" class="w-25">First name</label>
                        <input type="text" name="first_name" id="first_name" placeholder="First name" class="form-control" required>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center mb-2">
                        <label for="last_name" class="w-25">Last name</label>
                        <input type="text" name="last_name"  id="last_name" placeholder="Last name" class="form-control" required>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center mb-2">
                        <label for="email" class="w-25">E-mail</label>
                        <input type="email" name="email"  id="email" placeholder="Last name" class="form-control" required>
                    </div>
                    <div class="d-flex flex-row justify-content-between align-items-center mb-2">
                        <label for="username" class="w-25">Username</label>
                        <input type="text" name="username" id="username" placeholder="Your username" class="form-control" required>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-row justify-content-between align-items-center mb-2">
                            <label for="password" class="w-25">Password</label>
                            <input type="password" name="password" id="password" placeholder="Your password" class="form-control" required>
                        </div>
                   </div>
                    <div class="d-flex flex-column my-1">
                        <input type="submit" class="btn btn-outline-primary text-primary-emphasis d-block mb-2" value="Register" style="width: 200px;">
                        <p>Have an account. <a href="login.page.php" class="text-danger-emphasis">Click to login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once "../templates/footer.php";?>
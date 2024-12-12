<?php
require_once "../config.php";
require_once "../templates/header.php";
?>

<div class="container-fluid mx-0 py-3">
    <h4>Reset forgotten password</h4>
    <hr>
    <form action="../actions/send-password-reset.action.php" method="post" style="max-width: 500px;">
        <label for="email" class="mb-1">Enter your email</label>
        <input type="text" name="email"  class="form-control" required>
        <input type="submit" value="Reset now" class="btn btn-dark rounded-0 d-block my-3">
    </form>
</div>
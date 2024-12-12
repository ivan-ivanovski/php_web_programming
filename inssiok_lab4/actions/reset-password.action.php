<?php
    $token = $_GET['token'];
    $token_hash = hash("sha256",$token);
    require "../config.php";
    global $conn;
    $sql="SELECT * FROM user WHERE token_hashed=:th";
    $stmp=$conn->prepare($sql);
    $stmp->bindValue(":th",$token_hash);
    if(!$stmp->execute()){
        echo "Non valid token anymore";
        die();
    }
    while($res = $stmp->execute()->fetchArray(SQLITE3_ASSOC)){
        if(strtotime($res["token_expire_date"]<=time())) {
            die("Token expired");
        }
    };
    $_SESSION['token_status']['success']="valid";
    require "../templates/header.php";
    ?>
    <div class="container mx-0 my-3">
        <h3>Reset password form</h3>
        <form action="proccess-reset-password.action.php" method="post">
            <input type="hidden" name="token" value="<?=htmlspecialchars($token)?>">
            <input type="password" name="password" id="password" aria-label="password" placeholder="Enter new password">
            <input type="password" name="c-password" id="c-password" aria-label="c-password" placeholder="Repeat password">
            <input type="submit" value="Reset password">
        </form>
    </div>

<?php
    require "../config.php";
    global $conn;
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $userToken=$_POST['token'];
        var_dump($userToken);
        $newUserPassword=htmlspecialchars($_POST['password']);
        $confirmUserPassword=htmlspecialchars($_POST['c-password']);

        $newUserPasswordHashed=password_hash($newUserPassword,PASSWORD_DEFAULT);
        $confirmUserPasswordHashed=password_hash($confirmUserPassword,PASSWORD_DEFAULT);

        if(empty($newUserPassword) || empty($confirmUserPassword)){
            $_SESSION['msg']['danger']="Passwords are empty or passwords do not match";
            header("location:reset-password.action.php");
            die();
        }

        if($confirmUserPassword!==$newUserPassword){
            $_SESSION['msg']['danger']="Passwords do not match. Check and reenter passwords.";
            header("location:reset-password.action.php");
            die();
        }

        //checking for token if exist
        $sql = "SELECT * FROM user WHERE token_hashed = :th";
        $stmp = $conn->prepare($sql);
        $stmp->bindValue(':th', $userToken, SQLITE3_TEXT);
        $res = $stmp->execute();
        if ($res->fetchArray(SQLITE3_ASSOC) === false) {
            $_SESSION['msg']['danger'] = "Invalid token, please check the link.";
            header("location:reset-password.action.php");
            die();
        }
        //update if exist
        $sql="UPDATE user SET password=:ps WHERE token_hashed=:th";
        $stmp=$conn->prepare($sql);
        $stmp->bindValue(':th',$userToken,SQLITE3_TEXT);
        $stmp->bindValue(":ps",$newUserPasswordHashed);
        $res=$stmp->execute();
        if(!$res){
            $_SESSION['msg']['danger']="Password field can not be updated.";
            header("location:reset-password.action.php");
            die();
        }
        $_SESSION['msg']['success'] = "Password is updated. You can login.";
        header("location:../pages/login.page.php");
        $conn->close();
    }
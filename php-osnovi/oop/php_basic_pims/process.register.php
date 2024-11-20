<?php
    require_once "templates/header.php";
    if($_SERVER['REQUEST_METHOD']==="POST"){
        global $conn;

        $firstName=htmlspecialchars(trim($_POST['user_firstName']));

        $lastName=htmlspecialchars(trim($_POST['user_lastName']));

        $username=htmlspecialchars(trim($_POST['username']));

        $email=trim($_POST['email']);

        $password=htmlspecialchars(trim($_POST['password']));

        if(empty($firstName) && empty($lastName) && empty($username) && empty($email) && empty($password)){
            $_SESSION['error']['type']="danger";
            $_SESSION['error']['msg']="First name, last name, username, email or password is empty. Fill all fields";
            header('location:register.php');
            die();
        }

//        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
//            $_SESSION['error']['type']="danger";
//            $_SESSION['error']['msg']="Email that is provided is invalid. Enter valid email address.";
//            header('location:register.php');
//            die();
//        }

        $user_name=$firstName." ".$lastName;

        $hashed_password=password_hash($password,PASSWORD_DEFAULT);
        echo $hashed_password;

        $userFound=getUserByUsername($username);
        if($userFound){
            $_SESSION['error']['type']="danger";
            $_SESSION['error']['msg']="User exist in database";
            header('location:register.php');
            die();
        }

        $sql="INSERT INTO users(user_name, user_password, username, user_email) VALUES (:user_name,:user_password,:username,:user_email)";
        $stmp=$conn->prepare($sql);
        $stmp->bindValue(":user_name",$user_name,SQLITE3_TEXT);
        $stmp->bindValue(":user_password",$hashed_password,SQLITE3_TEXT);
        $stmp->bindValue(":username",$username,SQLITE3_TEXT);
        $stmp->bindValue(":user_email",$email,SQLITE3_TEXT);
        if($stmp->execute()){
            $_SESSION['error']['type']="info";
            $_SESSION['error']['msg']="You are successfully register to our site.";
            header('location:register.php');
            die();
        }

    }
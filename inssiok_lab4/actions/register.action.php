<?php
    require_once "../config.php";
    global $conn;
    function redirectIfEmpty($var){
        $_SESSION['msg']['danger']="$var is empty";//ovaa e poruka za greska sto se postavuvaa vo sesija pri registracija
        header("location:../pages/register.page.php");
        die;
    }
    function userExistInTable($username="",$email="")
    {
        global $conn;
        $sql = "SELECT id FROM user WHERE username = :un OR user_email = :em";
        $stmp = $conn->prepare($sql);
        $stmp->bindValue(":un", $username, SQLITE3_TEXT);
        $stmp->bindValue(":em", $email, SQLITE3_TEXT);
        $res = $stmp->execute();
        $row = $res->fetchArray(SQLITE3_ASSOC);
        if ($row){
            if ($row['id']) {
                if ($row['username'] == $username) {
                    $_SESSION['msg']['danger'] = "User with username $username already exists.";
                } elseif ($row['user_email'] == $email) {
                    $_SESSION['msg']['danger'] = "User with email $email already exists.";
                } else {
                    $_SESSION['msg']['danger'] = "User with the provided username or email already exists.";
                }
                header('Location: ../pages/register.page.php');
                die; // Stop further execution
            }
        }
        return true;
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        //postavuvanje i proverka validatcija na podotoci na serverska strana\

        $firstName=htmlspecialchars(trim($_POST['first_name']));
        if(empty($firstName)){
            redirectIfEmpty($firstName);
        }

        $lastName=htmlspecialchars(trim($_POST['last_name']));
        if(empty($lastName)){
            redirectIfEmpty($lastName);
        }

        $email=trim($_POST['email']);
        if(empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
            redirectIfEmpty($email);
        }

        $username=htmlspecialchars(trim($_POST['username']));
        if(empty($username)){
            redirectIfEmpty($username);
        }

        $password=htmlspecialchars(trim($_POST['password']));
        if(empty($password)){
            redirectIfEmpty($password);
        }

        //password hash

        $hashPassword = password_hash($password,PASSWORD_DEFAULT);

        //postavuvanje na prasalnik za korisnicko ime dali postoi ili dali email postoi

        if(!userExistInTable($username,$email)){
            $_SESSION['msg']['danger'] = "User exists";
            header('location:../pages/register.php');
            die();
        }

        //postavuvanje prasalnik za dodavanje na korisnik ako ne postoi vo bazata

        $sql="INSERT INTO user(first_name,last_name,user_email,username,password) VALUES (:fn,:ln,:ue,:un, :uhp)";

        //podgotovka na prasalnik
        $stmp=$conn->prepare($sql);

        //prakjanje na podatoci
        $stmp->bindValue(":fn",$firstName,SQLITE3_TEXT);
        $stmp->bindValue(":ln",$lastName,SQLITE3_TEXT);
        $stmp->bindValue(":ue",$email,SQLITE3_TEXT);
        $stmp->bindValue(":un",$username,SQLITE3_TEXT);
        $stmp->bindValue(":uhp",$hashPassword,SQLITE3_TEXT);

        //proverka za uspesen ne uspesno dodavanje
        if(!$stmp->execute()){
            $_SESSION['msg']['danger'] = "Registration fail.";
            header('location:../pages/register.page.php');
            die();
        }
        $_SESSION['msg']['successful'] = "You register successfully";
        header('location:../pages/login.page.php');
    }

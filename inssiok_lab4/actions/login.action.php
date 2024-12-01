<?php
    require_once "../config.php";
    global $conn;
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $username=htmlspecialchars(trim($_POST['username']));
        $sql="SELECT id,password FROM user WHERE username=:un";
        $stmp=$conn->prepare($sql);
        $stmp->bindValue(':un',$username);
        $res=$stmp->execute()->fetchArray(SQLITE3_ASSOC);
        if($res){
            if(password_verify($_POST['password'], $res['password'])){
                $userId=$res['id'];
                $_SESSION['userId']=$userId;
                header('Location: ../index.php');
            }
            else{
                $_SESSION['msg']['danger']="Password is not correct";
                header('Location: ../pages/login.page.php');
                $conn->close();
                die();
            }
        }
        else{
            $_SESSION['msg']['danger']="Username or password is not correct";
            header('Location: ../pages/login.page.php');
            $conn->close();
            die();
        }
    }

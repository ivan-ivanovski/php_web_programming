<?php
    require_once '../config.php';
    if(isset($_SESSION['userId'])){
        unset($_SESSION['userId']);
        session_destroy();
    }
    header('location:../pages/login.page.php');
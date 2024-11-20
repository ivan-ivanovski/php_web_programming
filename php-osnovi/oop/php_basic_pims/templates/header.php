<?php
require_once "functions.php";

$products = fetchProducts();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Product Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        :root{

            font-family: Arial,sans-serif;
            font-weight: normal;
        }
        /*paragraph underline color - puc*/
        .puc{
            text-decoration: underline;
            color: coral;
        }
        .productItem{
            width: 300px;
            max-width: 40vw;
        }
    </style>
</head>
<body>
<div class="navbar navbar-expand-lg mx-0 justify-content-between bg-light navbar-dark">
    <nav class="nav">
        <a href="index.php" class="nav-link">Home</a>
        <a href="products.php" class="nav-link">Products</a>
    </nav>
    <nav class="nav">
        <a href="#login.php"class="nav-link">Login</a>
        <a href="register.php"class="nav-link">Register</a>
    </nav>
</div>
<?php
    $database="db_lab3.sqlite";
    global $db;

    $db= new PDO('sqlite:' . $database);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menagiranje so produkti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-expand-lg justify-content-between navbar-dark bg-light">
        <nav class="nav">
            <a href="/index.php" class="nav-item nav-link text-underline fw-bold text-dark">MISP SOLUTIONS</a>
        </nav>
        <nav class="nav">
            <a href="/index.php" class="nav-item nav-link">Продукти</a>
            <a href="/index.php" class="nav-item nav-link">Корисници</a>

        </nav>

    </div>
<!Doctype html>
<html lang="en;mkd">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inssiok Lab4</title>
    <link rel="stylesheet" href='/static/css/bootstrap.min.css'>

</head>
<body data-bs-theme="light">
    <nav class="container-fluid navbar navbar-expand-lg justify-content-between bg-light" data-bs-theme="light">
        <nav class="nav">
            <a href="/index.php" class="nav-item nav-link fw-bold">Expanses</a>
        </nav>
        <nav class="nav">
            <?php if(isset($_SESSION['userId'])):?>
                <a href="/pages/profile.page.php" class="nav-item nav-link fw-bold">Profile</a>
                <a href="/actions/logout.action.php" class="nav-item nav-link fw-bold">Logout</a>
            <?php else: ?>
                <a href="/pages/login.page.php" class="nav-item nav-link fw-bold">Login</a>
                <a href="/pages/register.page.php" class="nav-item nav-link fw-bold">Register</a>
            <?php endif;?>
        </nav>
    </nav>
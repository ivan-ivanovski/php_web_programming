<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Example</title>
    <link rel="stylesheet" href="/static/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center">
        <div class="card card-body bg-white border-primary" style="max-width: 420px;">
            <div>
                <h1 class="d-block my-2 mx-auto">Login</h1>
            </div>
            <form action="login.php" method="post" autocomplete="off">
                <div class="form-group d-flex flex-row justify-content-between align-items-center gap-2  mb-2">
                    <label for="username" aria-label="Name">Username</label>
                    <input type="text" class="form-control w-75" id="username" placeholder="enter your username" name="username">
                </div>
                <div class="form-group d-flex flex-row justify-content-between align-items-center gap-2  mb-2">
                    <label for="password" aria-label="password">Password</label>
                    <input type="password" class="form-control w-75" id="password" placeholder="enter your password" name="password">
                </div>
                <div class="form-group d-flex flex-row justify-content-between align-items-center gap-2">
                    <input type="submit" value="Login to app" class="btn btn-outline-dark ">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
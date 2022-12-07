<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Request</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>
<body class="text-center">
        
            <div class="wrap">
                <h1 class="h3 text-center mb-3">Login</h1>

                <?php if (isset($_GET['registered'])) : ?>
                    <div class="alert alert-success">
                        Register successed. Please login.
                    </div>
                <?php endif ?>

                <?php if (isset($_GET['incorrect'])) : ?>
                    <div class="alert alert-warning">
                        Incorrect email and password
                    </div>
                <?php endif ?>

                <form action="_actions/login.php" method="post">
                    <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
                    <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
                    <button type="submit" class="w-100 btn btn-primary">Login</button>
                </form>
                    <br>
                    <a href="register.php">Register</a>
            </div>





</body>
</html>
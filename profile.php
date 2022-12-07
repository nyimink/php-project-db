<?php

    // session_start();

    // if (!isset($_SESSION['user'])) {
    //     header('location: index.php');
    //     exit();
    // }

    include ("vendor/autoload.php");

    use Helpers\Auth;

    $user = Auth::check();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
        <div class="container mt-5">
            <h1 class="mb-3"><?= $user->name ?> (<?= $user->role ?>)</h1>

            <?php if (isset($_GET['error'])) : ?>
                <div class="alert alert-warning">
                    Cannot upload file
                </div>
            <?php endif ?>

            <?php if (file_exists('_actions/photos/profile.jpg')) : ?>
                <img class="img-thumbnail mb-3" src="_actions/photos/profile.jpg" alt="Profile Picture" width="200">
            <?php endif ?>

            <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="file" name="photo" class="form-control">
                    <button class="btn btn-secondary">Upload</button>
                </div>
            </form>

            <ul class="list-group">
                <li class="list-group-item">
                    <b>Email:</b> <?= $user->email ?>
                </li>
                <li class="list-group-item">
                    <b>Phone:</b> <?= $user->phone ?>
                </li>
                <li class="list-group-item">
                    <b>Address:</b> <?= $user->address ?>
                </li>
            </ul>

            <br>
            <a href="_actions/logout.php" class="text-danger">Logout</a>


        </div>




</body>
</html>
<?php

    // session_start();
    
    // $email = $_REQUEST['email'];
    // $password = $_REQUEST['password'];

    // if ($email === 'nyiminkx01@gmail.com' && $password === 'nmk123@') {
    //     $_SESSION['user'] = ['username' => 'nyi min khant'];  //save associative array on server
    //     header('location: ../profile.php');
    // } else {
    //     header('location: ../index.php?incorrect=1');
    // }

    include ("../vendor/autoload.php");

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    use Helpers\HTTP;

    $table = new UsersTable(new MySQL());

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $user = $table->findByEmailAndPassword($email, $password);

    if ($user) {
        session_start();

        if ($table->suspended($user->id)) {
            HTTP::redirect("/index.php", "suspended=1");
        }

        $_SESSION['user'] = $user;
        HTTP::redirect("/profile.php");
    } else {
        HTTP::redirect("/index.php", "incorrect=login");
    }
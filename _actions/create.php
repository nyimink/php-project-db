<?php


    include("../vendor/autoload.php");

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    use Helpers\HTTP;

    $table = new UsersTable(new MySQL());
    
    $data = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'password' => md5($_POST['password']),
        'role_id' => 1,
    ];

    $id = $table->insert($data);

    if ($id) {
        HTTP::redirect("/index.php", "registered=true");
    } else {
        HTTP::redirect("/register.php", "error=true");
    }
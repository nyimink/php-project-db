<?php

    include ('../vendor/autoload.php');

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    use Helpers\Auth;
    use Helpers\HTTP;

    $auth = Auth::check();

    $table = new UsersTable(new MySQL());

    $id = $_GET['id'];
    $role = $_GET['role'];

    $table->changeRole($id, $role);

    HTTP::redirect("/admin.php");
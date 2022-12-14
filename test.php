<?php


    include ('vendor/autoload.php');

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    

    // $mysql = new MySQL;
    // $db = $mysql->connect();

    // $result = $db->query("SELECT * FROM users");
    // print_r( $result->fetch() );

    $table = new UsersTable(new MySQL());

    $id = 1;

    // $table->suspended($id);

    print_r($table->suspended($id));
<?php


    include ('vendor/autoload.php');

    use Libs\Database\MySQL;

    $mysql = new MySQL;
    $db = $mysql->connect();

    $result = $db->query("SELECT * FROM users");
    print_r( $result->fetch() );
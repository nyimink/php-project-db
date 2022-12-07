<?php

    include ('vendor/autoload.php');

    use Faker\Factory as Faker;

    use Helpers\Auth;
    use Helpers\HTTP;

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;

    $faker = Faker::create();
    
    echo $faker->name . "<br><br>";
    echo $faker->email . "<br><br>" ;
    echo $faker->phoneNumber . "<br><br>" ;
    echo $faker->address . "<br><br>";

    Auth::check();
    echo "<br><br>";

    HTTP::redirect();
    echo "<br><br>";

    $sql = new MySQL;
    $sql->connect();
    echo "<br><br>";

    $table = new UsersTable;
    echo $table->insert();
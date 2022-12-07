<?php

    include ('../vendor/autoload.php');

    use Faker\Factory as Faker;
    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;

    $faker = Faker::create();
    $table = new UsersTable(new MySQL());

    echo "starting...<br>";

    for ($i=0; $i < 20; $i++) { 
        $data = [
            'name' => $faker->name,
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'password' => 'password',
        ];

        $table->insert($data);
    }

    echo "Done";
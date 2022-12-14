<?php

    include ('vendor/autoload.php');

    use Faker\Factory as Faker;

    use Helpers\Auth;
    use Helpers\HTTP;

    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;

   $password = "haha";
   $hash = password_hash($password, PASSWORD_BCRYPT);

   echo $hash;
?>
  <br><br>
<?php 
   if(password_verify('haha', $hash)) {
    echo 'Correct';
   } else {
    echo 'incor';
   }
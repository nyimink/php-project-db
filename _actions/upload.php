<?php

    include("../vendor/autoload.php");
    
    use Libs\Database\MySQL;
    use Libs\Database\UsersTable;
    use Helpers\Auth;
    use Helpers\HTTP;

    $user = Auth::check();
    $table = new UsersTable(new MySQL());

    $error = $_FILES['photo']['error'];
    $name = $_FILES['photo']['name'];
    $tmp = $_FILES['photo']['tmp_name'];
    $type = $_FILES['photo']['type'];

    if ($error) {
        HTTP::redirect("/profile.php", "error=file");
    }

    if ($type === 'image/jpeg' || $type === 'image/png') {
        
        $table->updatePhoto( $user->id, $name );
        
        move_uploaded_file($tmp, "photos/$name");
        
        $user->photo = $name;                           // no need to login again

        HTTP::redirect("/profile.php");
    } else {
        HTTP::redirect("/profile.php", "error=type");
    }
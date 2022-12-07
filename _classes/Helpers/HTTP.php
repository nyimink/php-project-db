<?php

    namespace Helpers;

    // class HTTP
    // {
    //     static function redirect()
    //     {
    //         echo "HTTP redirect";
    //     }
    // }
    
    class HTTP
    {
        static $base = "http://localhost:90/practice_FT/big_tasks/php-login-project";

        static function redirect( $path, $query = "")
        {
            $url = static::$base . $path;
            if($query) $url .= "?$query";

            header("location: $url");
            exit();
        }
    }
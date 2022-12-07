<?php

    namespace Libs\Database;


    // class MySQL
    // {
    //     public function connect()
    //     {
    //         echo "MySQL connected";
    //     }
    // }

    use PDO;
    use PDOException;

    class MySQL
    {
        private $db;
        private $dbhost;
        private $dbuser;
        private $dbpass;
        private $dbname;

        public function __construct(
            $dbhost = "localhost", 
            $dbuser = "root", 
            $dbpass = "", 
            $dbname = "practisedb",
            )
        {
            $this->dbhost = $dbhost;
            $this->dbuser = $dbuser;
            $this->dbpass = $dbpass;
            $this->dbname = $dbname;
        }

        public function connect()
        {
            try {
                $this->db = new PDO(
                    "mysql:host=$this->dbhost;dbname=$this->dbname", 
                    "$this->dbuser", 
                    "$this->dbpass", 
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    ]
                );

                return $this->db;

            } catch (PDOException $e) {
                    return $e->getMessage();
            }
        }
    }
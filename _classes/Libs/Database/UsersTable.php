<?php

    namespace Libs\Database;

    // class UsersTable
    // {
    //     public function insert()
    //     {
    //         echo "UsersTable inserted";
    //     }
    // }

    use PDOException;

    class UsersTable
    {
        private $db;

        public function __construct(MySQL $db) {
            $this->db = $db->connect();
        }

        public function insert($data)
        {
            try{
                $query = "INSERT INTO users ( name, email, phone, address, password, created_at) VALUES (:name, :email, :phone, :address, :password, NOW())";

                $statement = $this->db->prepare($query);
                $statement->execute($data);
                
                return $this->db->lastInsertId();
            } catch(PDOException $e) {
                return $e->getMessage();
            }
        }

        public function getAll()
        {
            $statement = $this->db->prepare(
                "SELECT users.*, roles.name AS role, roles.value FROM users LEFT JOIN roles 
                 ON users.role_id = roles.id"
            );   

            return $statement->fetchAll();
        }

        public function findByEmailAndPassword( $email, $password ) {
            try {
                    $statement = $this->db->prepare(
                    "SELECT users.*, roles.name AS role, roles.value FROM users LEFT JOIN roles 
                    ON users.role_id = roles.id WHERE users.email = :email AND users.password = :password"
                );

                $statement->execute([
                    ":email" => $email,
                    ":password" => $password,
                ]);

                return $statement->fetch() ?? false;
            } catch (PDOException $e) {
                $e->getMessage();
                exit();
            }
        }
    }
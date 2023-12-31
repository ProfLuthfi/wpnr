<?php
    include_once 'Database.php' ;

class User {
        // Connection
        private $conn;
        // Table
        private $db_table = "user";
        // Columns
        public $id;
        public $fullname;
        public $email;
        public $password;     
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        public function getUser(){
            $sqlQuery = "SELECT * FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        public function getUserId($id){
            $sqlQuery = "SELECT * FROM " . $this->db_table . " WHERE id =".$id;
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
}

// $database = new Database();
// $db = $database->getConnection();
// $query = new User($db);
// $result = $query->getUser()->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);
?>
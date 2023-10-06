<?php
include_once 'Database.php';

class Sekolah
{
    // Connection
    private $conn;
    // Table
    private $db_table = "sekolah";
    // Columns
    public $id;
    public $fullname;
    public $user_id;
    public $nama_sekolah;
    public $tahun;
    public $nilai;
    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getSekolah()
    {
        $sqlQuery = "SELECT user.fullname, sekolah.* FROM ".$this->db_table. 
                    " INNER JOIN USER ON sekolah.user_id = user.id";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function getSekolahByUser($user_id)
    {
        $sqlQuery = "SELECT user.fullname, sekolah.* FROM ".$this->db_table. 
                    " INNER JOIN USER ON sekolah.user_id = user.id".
                    " WHERE user_id= ".$user_id;
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
}
// $database = new Database();
// $db = $database->getConnection();
// $query = new Sekolah($db);
// $result = $query->getSekolah()->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result);

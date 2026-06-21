<?php
class Database {
    private static $instance = null;
    private $conn;

    //Consturctor privadado
    private function __construct() {
       $dsn = "mysql:host=db; dbname=seminario_db; charset=utf8mb4";
       $user = "root";
       $password = "root_password";

       try {
        $this->conn = new PDO($dsn, $user, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
       }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
<?php
class Database {
    private $host = 'localhost:3306';
    private $db = 'crud_php_2025';
    private $user = 'root';
    private $pass = 'root';
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }

        return $this->conn;
    }
}
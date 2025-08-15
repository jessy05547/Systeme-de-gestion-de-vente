<?php
class Database{
    private $servername = "localhost";
    private $data       = "systeme_vente";
    private $username   = "root";
    private $password   = "";
    private $conn;

    public function __construct(){
        
    }
    public function getConnexion(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->data, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            return $this->conn;
        }catch(PDOException $e){
            echo "Connexion non retablie" . $e->getMessage();
        }
    }

};
?>
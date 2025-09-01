<?php
require_once 'config/database.php';
class ModelsProduit{
    private $conn;
    private $table = "produit";

    public $id_pr;
    public $nom_p;
    public $cat;
    public $dt_arriv;
    public $stock;
    public $prix_un;
    public $date;

    public function __construct(){
        $cos = new Database();
        $this->conn = $cos->getConnexion();
    }

    public function ajout($nom_pr, $cat, $dt_arriv, $stock, $prix_un,$date){
        $query = 'INSERT INTO '. $this->table ."(nom_p,categorie,dt_arrivage,stock,prix_unitaire,date) VALUES(?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$nom_pr,$cat,$dt_arriv,$stock,$prix_un,$date]);
    }

    public function afficheProduit(){
        $query = "SELECT * FROM" . $this->table;
        $stmt  = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
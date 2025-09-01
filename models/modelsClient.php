<?php
require_once 'config/database.php';

class ModelsClient{
    private $conn;
    private $table = "client";

    public $id;
    public $name;
    public $first;
    public $tel;
    public $email;
    public $adr;
    public $ntpayer;

    public function __construct(){
        $mm = new Database();
        $this->conn = $mm->getConnexion();
    }

    public function create($nom, $prenom, $tel, $email, $adr, $netp){
        $req = "INSERT INTO " . $this->table . " (nom_cl, prenom_cl,tel, email, adr,net_a_payer) VALUES(?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($req);
        $stmt->execute([$nom, $prenom, $tel, $email, $adr, $netp]);
    }

    public function delete($id){
        $req = "DELETE FROM " . $this->table . "WHERE id = ?";
        $stmt = $this->conn->prepare($req);
        // $this->id = htmlspecialchars(strip_tags($id));
        // $stmt->bindParam(1, $this->id);
        $result = $stmt->execute([$id]);
        return $stmt->rowCount() > 0;
    }

    public function readOne($id){
        $req = "SELECT * FROM " . $this->table . "WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($req);
        // $stmt->binParam(1,$id);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function update(){
        $req = "UPDATE FROM" . $this->table . "SET name=:nom, first=:prenom, tel=:tel, email=:email, adr=:adr, ntpayer=:net_a_payer";
        $stmt = $this->conn->prepare($req);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->first = htmlspecialchars(strip_tags($this->first));
        $this->tel = htmlspecialchars(strip_tags($this->tel));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->adr = htmlspecialchars(strip_tags($this->adr));
        $this->ntpayer = htmlspecialchars(strip_tags($this->ntpayer));

        return $stmt->execute();
    }

    public function read(){
        $req = "SELECT * FROM " . $this->table;
        $grok = $this->conn->prepare($req);
        $grok->execute();
        return $grok->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
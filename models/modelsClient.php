<?php
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

    public function __construct($db){
        $this->conn = $db;
    }

    public function create(){
        $req = "INSERT INTO " . $this->table . "SET name=:nom, first=:prenom, tel=:tel, email=:email, adr=:adr, ntpayer=:net_a_payer";
        $stmt = $this->conn->prepare($req);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->first = htmlspecialchars(strip_tags($this->first));
        $this->tel = htmlspecialchars(strip_tags($this->tel));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->adr = htmlspecialchars(strip_tags($this->adr));
        $this->ntpayer = htmlspecialchars(strip_tags($this->ntpayer));

        $stmt->binParam(":nom",$this->name);
        $stmt->binParam(":prenom",$this->first);
        $stmt->binParam(":tel",$this->tel);
        $stmt->binParam(":email",$this->email);
        $stmt->binParam(":adr", $this->adr);
        $stmt->binParam(":net_a_payer", $this->ntpayer);

        return $stmt->execute();
    }

    public function delete($id){
        $req = "DELETE FROM " . $this->table . "WHERE id = ?";
        $stmt = $this->conn->prepare($req);
        $this->id = htmlspecialchars(strip_tags($id));
        $stmt->binParam(1, $this->id);
        return $stmt->execute();
    }

    public function readOne($id){
        $req = "SELECT * FROM " . $this->table . "WHERE id = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($req);
        $stmt->binParam(1,$id);
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

        $stmt->binParam(":nom",$this->name);
        $stmt->binParam(":prenom",$this->first);
        $stmt->binParam(":tel",$this->tel);
        $stmt->binParam(":email",$this->email);
        $stmt->binParam(":adr", $this->adr);
        $stmt->binParam(":net_a_payer", $this->ntpayer);

        return $stmt->execute();
    }

    public function read(){
        $req = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($req);
        return $stmt->execute();
    }
}
?>
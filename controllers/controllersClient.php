<?php
class ControllersClient{
    private $client;
    public function __construct($db){
        $this->client = new ModelsClient($db);
    }
    public function index(){
        $stmt = $this->client->read();
        include_once '../views/index.php';
    }

    public function create(){
        if($_POST){
            $this->client->name = $_POST['nom'];
            $this->client->first = $_POST['prenom'];
            $this->client->tel  = $_POST['tel'];
            $this->client->email = $_POST['email'];
            $this->client->ntpayer = $_POST['net_a_payer'];

            if($this->client->create()){
                header("Location:index.php");
            }
        }
        include_once '../views/formulaire.php';
    }

    public function edit($id){
        if($_POST){
            $this->client->id = $id;
            $this->client->name = $_POST['name'];
            $this->client->first= $_POST['first'];
            $this->client->tel  = $_POST['tel'];
            $this->client->email= $_POST['email'];
            $this->client->ntpayer = $_POST['net_a_payer'];

            if($this->client->update()){
                header("Location: index.php");
            }
        }
        $user = $this->client->readOne($id);
        include_once '../views/client/editClient.php';
    }

    public function delete($id){
        if($this->client->delete($id)){
            header("Location: index.php");
        }
    }
}
?>
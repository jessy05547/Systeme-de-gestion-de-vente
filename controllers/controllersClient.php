<?php
class ControllersClient{
    private $client;
    public function __construct(){
        $this->client = new ModelsClient();
    }
    public function index(){
        // $stmt = $this->client->read();
        require_once 'views/index.php';
    }

    public function create(){
        if($_POST){
            $name = $_POST['nom'];
            $first = $_POST['prenom'];
            $tel  = $_POST['tel'];
            $email = $_POST['email'];
            $adr = $_POST['adr'];
            $ntpayer = $_POST['net_a_payer'];

            if($this->client->create($name,$first,$tel, $email,$adr, $ntpayer )){
                header("Location: index");
            }
        }
        require_once 'views/index.php';
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
            header("Location: ../views/client/client.php");
            // require __DIR__ . '/../views/client/client.php';
        }else{
            echo "Suppression échoué";
        }
    }

    public function affiche(){
        $liste_client = $this->client->read();
        // include_once '../views/client/client.php';
        require __DIR__ . '/../views/client/client.php';
    }
}
?>
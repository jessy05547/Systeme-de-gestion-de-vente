<?php
class ControllersProduit{
    private $produit;
    public function __construct(){
        $this->produit = new ModelsProduit();
    }

    public function acceuil(){
        require_once 'views/index.php';
    }

    public function ajout(){
        if($_POST){
            $nom_pr   = $_POST['nom'];
            $cat      = $_POST['cat'];
            $dt_arriv = $_POST['date'];
            $stock    = $_POST['stock'];
            $prix_un  = $_POST['prix'];
            $date     = $_POST['dt'];
            
            
            if($this->produit->ajout($nom_pr,$cat,$dt_arriv,$stock,$prix_un,$date)){
                header('Location:produit/ajout');
            }
        }
        require_once 'views/index.php';
    }

    public function lire(){
        $pro = $this->produit->afficheProduit();
        require __DIR__ . '/ ../views/produit/produit.php';
    }
}
?>
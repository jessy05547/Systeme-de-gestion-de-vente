<?php
require_once 'config/database.php';
require_once 'models/modelsClient.php';
require_once 'controllers/controllersClient.php';
require_once 'models/modelsProduit.php';
require_once 'controllers/controllersProduit.php';

$db = new Database();
$conn = $db->getConnexion();
$controller = new ControllersClient($conn);
$produit = new ControllersProduit($conn);
$requete = $_SERVER['REQUEST_URI'];
$lien = ltrim($requete, '/');

// $action = isset($_GET[$lien]) ? $_GET[$lien] : 'index';
$action =  $lien;

$id = isset($_GET['id']) ? $_GET['id'] : null;

// echo $action;
switch($action) {
    case 'index':
        $controller->index();
        break;
    case 'client/create':
        $controller->create();
        break;
    case 'client/edit':
        if ($id) {
            $controller->edit($id);
        } else {
            $controller->index();
        }
        break;
    case 'client/delete':
        if ($id) {
            $result = $controller->delete($id);
            if($result){
                header("Location: /controllers/controllersClient.php=client/liste");
                exit();
            }
            // $controller->delete($id);
        } else {
            $controller->index();
        }
        break;
    case 'client/liste':
        $controller->affiche();
        // include_once 'views/client/client.php';
        break;
        
    case 'produit/liste':
        $produit->lire();
        break;

    case 'accueil':
        include_once 'views/index.php';
        break;
    case 'produit/nouveau':
        $produit->ajout();
        break;
    case 'produit/affiche':
        include_once 'views/produit/produit.php';
        break;
    case 'produit/ajout':
        include_once 'views/produit/ajoutProduit.php';
        break;
    case 'client/form':
        include_once 'views/client/formulaire.php';
        break;
    default:
        include_once 'views/index.php';
        break;
}
?>
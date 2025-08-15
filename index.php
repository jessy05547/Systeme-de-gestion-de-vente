<?php
require_once 'config/database.php';
require_once 'models/modelsClient.php';
require_once 'controllers/controllersClient.php';

$db = new Database();
$conn = $db->getConnexion();
$controller = new ControllersClient($conn);
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
            $controller->delete($id);
        } else {
            $controller->index();
        }
        break;
    case 'client/form':
        include_once 'views/formulaire.php';
        break;
    default:
        include_once 'views/authentification.php';
        break;
}
// switch($action){
//     case 'index':
//         $controller->index();
//         break;
        // Code to display the list of clients
    // case 'create'://client/create
    //     $controller->create();
    //     // Code to handle client creation
    //     break;
    // case 'edit':
    //     $controller->edit($id);
    //     // Code to handle client editing
    //     break;
    // case 'delete':
    //     $controller->delete($id);
    //     // Code to handle client deletion
        // break;
//     case 'client':
//         include_once 'views/formulaire.php';
//         // Code to display the client creation form
//         break;
//     default:
//         // Handle unknown action
//         // $controller->index();
//         include_once 'views/authentification.php';
//         break;
// }
?>
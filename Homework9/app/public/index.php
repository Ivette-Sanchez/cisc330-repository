<?php
require_once "../models/Model.php";
require_once "../models/Artpiece.php";
require_once "../controllers/ArtpieceController.php";

$env = parse_ini_file('../../.env');
define('DBNAME', $env['DBNAME']);
define('DBHOST', $env['DBHOST']);
define('DBUSER', $env['DBUSER']);
define('DBPASS', $env['DBPASS']);

use app\controllers\ArtpieceController;

//get uri without query strings
$uri = strtok($_SERVER["REQUEST_URI"], '?');

//get uri pieces
$uriArray = explode("/", $uri);

//get all or a single art
if ($uriArray[1] === 'api' && $uriArray[2] === 'artpieces' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    //only id
    $id = isset($uriArray[3]) ? intval($uriArray[3]) : null;
    $artpieceController = new ArtpieceController();

    if ($id) {
        $artpieceController->getArtpieceByID($id);
    } else {
        $artpieceController->getArtpieces();
    }
}


//views

if ($uriArray[1] === 'artpieces' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = isset($uriArray[2]) ? intval($uriArray[2]) : null;
    $artpieceController = new ArtpieceController();

    if ($id) {
        $artpieceController->artpieceDetailsView();
    } else {
        $artpieceController->artpiecesView();
    }

}

exit();

?>
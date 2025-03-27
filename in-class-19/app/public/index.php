<?php
require_once "../models/Model.php";
require_once "../models/Posts.php";
require_once "../controllers/PostController.php";

// Load environment variables
$env = parse_ini_file('../../.env');
define('DBNAME', $env['DBNAME']);
define('DBHOST', $env['DBHOST']);
define('DBUSER', $env['DBUSER']);
define('DBPASS', $env['DBPASS']);
//define('DBPORT', $env['DBPORT']);

use app\controllers\PostController;

// Get URI without query strings
$uri = strtok($_SERVER["REQUEST_URI"], '?');

// Get URI pieces
$uriArray = explode("/", $uri);
// 0 = ""
// 1 = api
// 2 = posts
// 3 = id (optional)

// API Endpoint for posts (GET all or a specific post)
if ($uriArray[1] === 'api' && $uriArray[2] === 'posts' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = isset($uriArray[3]) ? intval($uriArray[3]) : null;
    $postController = new PostController();

    if ($id) {
        $postController->getPostByID($id);
    } else {
        $postController->getPosts();
    }
}
//views

if ($uriArray[1] === 'posts' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = isset($uriArray[2]) ? intval($uriArray[2]) : null;
    $PostController = new PostController();

    if ($id) {
        $PostController->userDetailsView();
    } else {
        $PostController->usersView();
    }
}



// include '../public/assets/views/notFound.html';
exit();

?>

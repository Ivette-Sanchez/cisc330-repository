<?php
require "./controllers/Controller.php";
require "./models/Model.php";
require "./Routing/Router.php";

$router = new Router();
$router->handleRoutes();




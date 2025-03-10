<?php
require_once "ErrorController/errorController.php";
use ErrorController\errorController;

$errorController = new errorController();
$errorController->viewErrors();


<?php

require './app/controller/ControllerNote.php'; 

use app\controller\ControllerNote;

// starting a session to store messages
session_start();

//instantiating the controller
$controller = new ControllerNote();


//handle form submission or display the form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $controller->submitNote();
} 
else {
    $controller->viewNoteForm();
}


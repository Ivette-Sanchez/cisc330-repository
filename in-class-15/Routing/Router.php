<?php

use Controller\PostController;

class Router {

    public function handleRoutes() {

        //get URI without query string
        $url = strtok($_SERVER["REQUEST_URI"], '?');

        //split url into array
        $uriArray = explode("/", $url);
        $this->userRoutes($uriArray);
    }


    protected function userRoutes($uriArray) {
        if ($uriArray[1] === 'posts' && $_SERVER['REQUEST_METHOD'] === 'GET') {
            $postController = new PostController();
            $postController->getPost(); 
            exit();
        }

    
    }
}

<?php

namespace Controller;

use Model\PostModel;

class PostController
{
    public function getPost() {
        $postModel = new PostModel();
        $posts = $postModel->getArray();
        
        header('Content-Type: application/json'); // ?
        echo json_encode($posts);
        exit();
    }

}





        
     


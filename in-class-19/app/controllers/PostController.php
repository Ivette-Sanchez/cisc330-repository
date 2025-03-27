<?php

namespace app\controllers;

use app\models\Post;

class PostController
{
    public function getPosts() {
        $postModel = new Post();
        header("Content-Type: application/json");
        $query = !empty($_GET['title']) ? $_GET['title'] : null;
        $posts = $postModel->getPosts($query);

        echo json_encode($posts);
        exit();
    }

    public function getPostByID($id) {
        $postModel = new Post();
        header("Content-Type: application/json");
        $post = $postModel->getPostById($id);

        if ($post) {
            echo json_encode($post);
        } else {
            http_response_code(404);
            echo json_encode(["error" => "Post not found"]);
        }
        exit();
    }

    public function usersView() {
        include '../public/assets/views/post/posts.html';
        exit();
    }

    public function userDetailsView() {
        include '../public/assets/views/post/postDetails.html';
        exit();
    }
}


  
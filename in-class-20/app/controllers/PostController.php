<?php

namespace app\controllers;

use app\models\Post;

class PostController
{
    public function validatePost($inputData) {
        $errors = [];
        $name = $inputData['name'];
        $firstPost = $inputData['firstPost'];
        $email = $inputData['email'];

        if ($name) {
            $name = htmlspecialchars($name, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($name) < 2) {
                $errors['nameShort'] = 'name is too short';
            }
        } else {
            $errors['requiredName'] = 'name is required';
        }

        if ($firstPost) {
            $firstPost = htmlspecialchars($firstPost, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($firstPost) < 2) {
                $errors['firstPostShort'] = 'first post is too short';
            }
        } else {
            $errors['requiredFirstPost'] = 'first Post is required';
        }

        if ($email) {
            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
            if (!preg_match($regex, $email)) {
                $errors['invalidEmail'] = 'email is invalid.';
            }
        } else {
            $errors['requiredEmail'] = 'email is required';
        }

        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }
        return [
            'name' => $name,
            'firstPost' => $firstPost,
            'email' => $email,
        ];
    }

    public function getAllPosts() {
        $postModel = new Post();
        header("Content-Type: application/json");
        $posts = $postModel->getAllPosts();

        echo json_encode($posts);
        exit();
    }

    public function getPostByID($id) {
        $postModel = new Post();
        header("Content-Type: application/json");
        $post = $postModel->getPostById($id);
        echo json_encode($post);
        exit();
    }

    public function savePost() {
        $inputData = [
            'name' => $_POST['name'] ?: null,
            'firstPost' => $_POST['firstPost'] ?: null,
            'email' => $_POST['email'] ?: null,
        ];
        $postData = $this->validatePost($inputData);

        $post = new Post();
        $post->savePost(
            [
                'name' => $postData['name'],
                'firstPost' => $postData['firstPost'],
                'email' => $postData['email'],
            ]
        );

        http_response_code(200);
        echo json_encode([
            'success' => true
        ]);
        exit();
    }

    public function updatePost($id) {
        if (!$id) {
            http_response_code(404);
            exit();
        }

        //no built-in super global for PUT
        parse_str(file_get_contents('php://input'), $_PUT);

        $inputData = [
            'name' => $_PUT['name'] ?: null,
            'firstPost' => $_PUT['firstPost'] ?: null,
            'email' => $_PUT['email'] ?: null,
        ];
        $postData = $this->validatePost($inputData);
        //we could save the data off to be saved here

        $post = new Post();
        $post->updatePost(
            [
                'id' => $id,
                'name' => $postData['name'],
                'firstPost' => $postData['firstPost'],
                'email' => $postData['email'],
            ]
        );

        http_response_code(200);
        echo json_encode([
            'success' => true
        ]);
        exit();
    }

    public function deletePost($id) {
        if (!$id) {
            http_response_code(404);
            exit();
        }

        $post = new Post();
        $post->deletePost(
            [
                'id' => $id,
            ]
        );

        http_response_code(200);
        echo json_encode([
            'success' => true
        ]);
        exit();
    }

    public function postsView() {
        include '../public/assets/views/post/posts-view.html';
        exit();
    }

    public function postsAddView() {
        include '../public/assets/views/post/posts-add.html';
        exit();
    }

    public function postsDeleteView() {
        include '../public/assets/views/post/posts-delete.html';
        exit();
    }

    public function postsUpdateView() {
        include '../public/assets/views/post/posts-update.html';
        exit();
    }


}
<?php

namespace app\models;

//using the database class namespace
use app\models\Model;

class Post extends Model {

    public function getAllPostsByNameOrEmail($name, $email) {
        $query = "select * from post WHERE name like :name or email like :email";
        return $this->query($query, [
            'name' => '%' . $name . '%',
            'email' => '%' . $email . '%',
        ]);
    }

    public function getAllPosts() {
        $query = "select * from post";
        return $this->query($query);
    }

    public function getPostById($id){
        $query = "select * from post where id = :id";
        return $this->query($query, ['id' => $id]);
    }

    public function savePost($inputData){
        $query = "insert into post (name, firstPost, email) values (:name, :firstPost, :email);";
        return $this->query($query, $inputData);
    }

    public function updatePost($inputData){
        $query = "update post set name = :name, firstPost = :firstPost, email = :email where id = :id";
        return $this->query($query, $inputData);
    }

    public function deletePost($inputData){
        $query = "DELETE FROM post where id = :id";
        return $this->query($query, $inputData);
    }
}
<?php

namespace app\models;

class Post extends Model {

    public function getPosts($title) {
        if ($title) {
            $query = "select * from posts where title like :title";
            return $this->fetchAllWithParams($query, ['title' => '%' . $title . '%']);
        }
        $query = "SELECT * FROM posts";
        return $this->fetchAll($query);
    }

    public function getPostById($id) {
        $query = "select * from posts where id = :id";
        return $this->fetchAllWithParams($query, ['id' => $id])[0] ?? null;
    }
}



   
    
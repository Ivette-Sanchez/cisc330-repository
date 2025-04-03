<?php

namespace app\models;

class User extends Model {

    public function getUsers($title) {
        if ($title) {
            $query = "select * from users WHERE title like :title";
            return $this->fetchAllWithParams($query, ['title' => '%' . $title . '%']);
        }
        $query = "select * from users";
        return $this->fetchAll($query);
    }

    public function getUserById($id){
        $query = "select * from users where id = :id";
        return $this->fetchAllWithParams($query, ['id' => $id])[0] ?? null;
    }
}

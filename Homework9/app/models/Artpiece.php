<?php

namespace app\models;

class Artpiece extends Model {

    public function getArtpieces($title) {
        if ($title) {
            $query = "select * from art WHERE title like :title"; 
            return $this->fetchAllWithParams($query, ['title' => '%' . $title . '%']);
        }
        $query = "select * from art";
        return $this->fetchAll($query);
    }

    public function getArtpieceById($id){
        $query = "select * from art where id = :id";
        return $this->fetchAllWithParams($query, ['id' => $id])[0] ?? null;
    }
}

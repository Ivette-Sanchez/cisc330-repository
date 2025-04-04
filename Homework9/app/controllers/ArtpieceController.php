<?php

namespace app\controllers;

use app\models\Artpiece;

class ArtpieceController
{
    public function getArtpieces() {
        $artpieceModel = new Artpiece();
        header("Content-Type: application/json");
        $query = !empty($_GET['title']) ? $_GET['title'] : null;
        $artpieces = $artpieceModel->getArtpieces($query);

        echo json_encode($artpieces);
        exit();
    }

    public function getArtpieceByID($id) {
        $artpieceModel = new Artpiece();
        header("Content-Type: application/json");
        $artpiece = $artpieceModel->getArtpieceById($id);
        echo json_encode($artpiece);
        exit();
    }

    public function artpiecesView() {
        include '../public/assets/views/art/artpieces.html';
        exit();
    }


    public function artpieceDetailsView() {
        include '../public/assets/views/art/artpieceDetails.html';
        exit();
    }

}
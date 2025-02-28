<?php
//we need this to accept requests from any domain
header("Access-Control-Allow-Origin: *");

$uri = strtok($_SERVER["REQUEST_URI"], '?');

//get uri pieces
$uriArray = explode("/", $uri);
//var_dump($uriArray);
//0
//1 forms

if ($uriArray[1] === 'cakeshop' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $cakeshop = [
        [
            'name' => 'Chocolate Cake',
            'price' => '$15'
        ],
        [
            'name' => 'Ice Cream Cake',
            'price' => '$35'
        ],
        [
            'name' => 'Vanilla Cake', 
            'price' => '$20'
        ],
        [
            'name' => 'Tres Leches Cake',
            'price' => '$60'
        ]
    ];

    echo json_encode($cakeshop);
    exit();
}

if ($uriArray[1] === 'form' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    echo json_encode([
        'message' => 'Success'
    ]);
    exit();
}


?>
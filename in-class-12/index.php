<?php
header("Access-Control-Allow-Origin: *"); 

$uri = strtok($_SERVER["REQUEST_URI"], '?'); 
$uriArray = explode("/", $uri);

if ($uriArray[1] === 'html' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    echo '
    <html>
        <head> 
            <body> HTML response </body>
        </head>
    </html>
    ';
    exit();
}

if ($uriArray[1] === 'json' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    header("Content-Type: application/json");
    $data = [
        'message' => 'This is a JSON response'
    ];
    echo json_encode($data);
    exit();
}
?>





<?php
    // Require the Cake class file
    require 'classes/Cake.php';

    // the Cake class
    use classes\Cake;

    //creating new instances of the Cake class
    $cake1 = new Cake('Chocolate Cake', '$25', 'Milk Chocolate');
    $cake2 = new Cake('Ice Cream Cake', '$35', 'Cookies and Cream');
    $cake3 = new Cake('Vanilla Cake', '$20', 'Funfetti');
    $cake4 = new Cake('Tres Leches Cake', '$60', 'Caramel');

    // echo the JSON-encoded output of the Cake object's data
    echo $cake1->getJson();
    echo $cake2->getJson();
    echo $cake3->getJson();
    echo $cake4->getJson();
?>

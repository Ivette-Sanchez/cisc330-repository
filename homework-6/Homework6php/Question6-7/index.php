<?php
    //6a. An associative array with keys and values. 
    $associativeArray = [
        'Name' => 'Tres Leche Cake',
        'Price' => 45,
        'Flavor' => 'Caramel',
        'Size' => 'Large'
    ];

    // 6b. Loop through the array and echo a string with each key and value.
    //key => value
    foreach ($associativeArray as $key => $value) {
        echo "{$key}: {$value}";
        echo '<br>'; 
    }

    //7. Create a function that has: 
        //i. a set return type
        //ii. an optional parameter 
        //iii. a typed parameter 
        //iv. and call your function with values that have the correct data types 

    function calculateTotalPrice(int $price, int $quantity, float $discount = 0.0) : float { //the :float is the return type we have set 
        return ($price * $quantity) - $discount;                 //^ also setting discount to 0 shows its an optional paramter--> if no value is passed for discount==> 0
    }                                                            //^all three ($price, $quantity, $discount) are the typed parameters --> typed as in int and float in this case

    echo "<br>Buy 2 get $10 off deal<br>";

    //calling the function with all parameters--> using the $10 off discount --> optional parameter
    $priceWithDiscount = calculateTotalPrice($associativeArray['Price'], 2, 10.0);
    echo "<br>Total price for 2 cakes with $10 discount: $" .$priceWithDiscount; 

    //calling the function using the default discount--> no discount
    $priceWithoutDiscount = calculateTotalPrice($associativeArray['Price'], 2);
    echo "<br>Total price for 2 cakes without discount: $" .$priceWithoutDiscount;

?>
  
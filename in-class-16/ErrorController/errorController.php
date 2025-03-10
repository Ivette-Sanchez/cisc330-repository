<?php

namespace ErrorController;

use Exception;
use Error;

class errorController {

    public function warningFunction() {
        preg_match('/Will be a warning/', 'test');

    }

    public function errorFunction() {
        $number = -1; 
        $quantity = 'three';
        if (!is_numeric($quantity)) { //makes sure everuthing is numbers
            throw new Exception("Wuantity should be a number.");
        }
        $number/$quantity;
    }
 
    
    public function viewErrors() {
        $this->warningFunction();
        try {
            throw new Exception('Something went wrong!');
        } catch (Exception $e) {
            echo 'Caught Exception';
        }
        //try {
          //  if(true) {
            //    throw new Exception('Something went wrong!');
            //}
        //}
       // catch (Error $e) {
         //   echo 'Caught Error';
        //}
        
        //set a custom function for errors
//        set_error_handler("app\controllers\myErrorHandler");
//        trigger_error('');

        try {
            $result = 10 / 0; //example of error
        } 
        catch (Error $e) {
            echo 'Caught Error';
        }

        try {
            // Call a function that triggers an exception
            $this->errorFunction();
        } catch (Exception $e) {
            echo 'Caught Exception in errorFunction';
        }
    }
}


?>     
 


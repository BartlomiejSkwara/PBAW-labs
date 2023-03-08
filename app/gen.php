<?php
require_once dirname(__FILE__)."/../config.php"; 
require_once _ROOT_PATH."/app/genTypesLib.php";

//1.
function getParams(&$shapecharacter, &$shapesize, &$shape){
    $shapecharacter = isset($_REQUEST["shapecharacter"])?$_REQUEST["shapecharacter"]:null;
    $shapesize      = isset($_REQUEST["shapesize"])?$_REQUEST["shapesize"]:null;
    $shape          = isset($_REQUEST["shape"])?$_REQUEST["shape"]:null;
}

//2.
function validateParams(&$shapecharacter, &$shapesize, &$shape, &$messages){
    
    if(!(isset($shapecharacter) && isset($shapesize) && isset($shape))){
        return false;
    }
    if($shapecharacter == ""){
        $messages [] = 'Podano pusty znak';
    }
    if($shapesize == ""){
        $messages [] = 'Podano pusty rozmiar';
    }


    if(count($messages)==0){
        if (is_numeric( $shapesize )) {
            return true;   
        }
        $messages [] = 'Podany rozmiar nie jest liczbą';
    }
    
    return false;
}

function generateShape(&$shapecharacter, &$shapesize, &$shape, &$result){
    
    switch ($shape){
        case "square":
        generateSquare($result, $shapesize, $shapecharacter);
            break;
        
        case "stairs":
        generateStairs($result, $shapesize, $shapecharacter);
            break;

        case "triangle":
        generateTriangle($result, $shapesize, $shapecharacter);
            break;

        default:
        generateTiltedSquare($result, $shapesize, $shapecharacter);
            
    }
}









$shapecharacter = null;
$shapesize = null; 
$shape = null;
$messages = [];
$result = null;

getParams($shapecharacter, $shapesize, $shape);
if(validateParams($shapecharacter, $shapesize, $shape, $messages)){
   generateShape($shapecharacter, $shapesize, $shape, $result);
}






include _ROOT_PATH."/app/gen_view.php";



<?php
require_once dirname(__FILE__)."/../config.php"; 
require_once _ROOT_PATH."/app/genTypesLib.php";
include _ROOT_PATH.'/app/security/checkSession.php';

//1.
function getParams(&$genForm){
    $genForm['shapecharacter'] = isset($_REQUEST["shapecharacter"])?$_REQUEST["shapecharacter"]:null;
    $genForm['shapesize']      = isset($_REQUEST["shapesize"])     ?$_REQUEST["shapesize"]:null;
    $genForm['shape']          = isset($_REQUEST["shape"])         ?$_REQUEST["shape"]:null;
}

//2.
function validateParams(&$genForm, &$messages){
    
    if(!(isset($genForm["shapecharacter"]) && isset($genForm["shapesize"]) && isset($genForm["shape"]))){
        return false;
    }
    if($genForm["shapecharacter"] == ""){
        $messages [] = 'Podano pusty znak';
    }
    if($genForm["shapesize"] == ""){
        $messages [] = 'Podano pusty rozmiar';
    }


    if(count($messages)==0){
        if (is_numeric( $genForm["shapesize"] )) {
            return true;   
        }
        $messages [] = 'Podany rozmiar nie jest liczbą';
    }
    
    return false;
}

function generateShape(&$genForm, &$result){
    
    switch ($genForm['shape']){
        case "square":
        generateSquare($result, $genForm['shapesize'], $genForm['shapecharacter']);
            break;
        
        case "stairs":
        generateStairs($result, $genForm['shapesize'], $genForm['shapecharacter']);
            break;

        case "triangle":
        generateTriangle($result, $genForm['shapesize'], $genForm['shapecharacter']);
            break;

        default:
        generateTiltedSquare($result, $genForm['shapesize'], $genForm['shapecharacter']);
            
    }
}








$genForm = [];
$messages = [];
$result = null;




getParams($genForm);
if(validateParams($genForm, $messages)){
   generateShape($genForm, $result);
}






include _ROOT_PATH."/app/genView.php";



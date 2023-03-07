<?php
require_once dirname(__FILE__)."/../config.php"; 

//1.
$shapecharacter = $_REQUEST["shapecharacter"];
$shapesize      = $_REQUEST["shapesize"];
$shape     = $_REQUEST["shape"];


//2.
if(!(isset($shapecharacter) && isset($shapesize) && isset($shape))){
    $messages [] = 'Brak parametrów';
}
if($shapecharacter == ""){
    $messages [] = 'Podano pusty znak';
}
if($shapesize == ""){
    $messages [] = 'Podano pusty rozmiar';
}


if(empty($messages)){

    if (! is_numeric( $shapesize )) {
		$messages [] = 'Podany rozmiar nie jest liczbą';
	}
}


//3.
if(empty($messages)){
    $result = "";
    switch ($shape){
        case "square":
            for($i = 1; $i<=$shapesize; $i++){
        
                for($j = 0; $j<$shapesize; $j++){
                    $result=$result.$shapecharacter."&ensp;";
                }    
                $result=$result."<br>";
            }
            break;
        
        case "stairs":
            for($i = 1; $i<=$shapesize; $i++){
        
                for($j = 0; $j<$i; $j++){
                    $result=$result.$shapecharacter;
                }    
                $result=$result."<br>";
            }
            break;

        case "triangle":

            for($i = 1; $i<=$shapesize; $i++){
                
                for($j = 0; $j<($shapesize -$i); $j++){
                    $result=$result."&ensp;";
                }
        
                for($j = 0; $j<$i; $j++){
                    $result=$result.$shapecharacter.$shapecharacter;
                }    
                $result=$result."<br>";
            }
            break;

        default:
            for($i = 1; $i<=$shapesize; $i++){
                    
                for($j = 0; $j<($shapesize -$i); $j++){
                    $result=$result."&ensp;";
                }
        
                for($j = 0; $j<$i; $j++){
                    $result=$result.$shapecharacter.$shapecharacter;
                }    
                $result=$result."<br>";
            }
            for($i = 0; $i<=$shapesize; $i++){
                    
                for($j = 0; $j<$i; $j++){
                    $result=$result."&ensp;";
                }
        
                for($j = 0; $j<($shapesize-$i); $j++){
                    $result=$result.$shapecharacter.$shapecharacter;
                }    
                $result=$result."<br>";
            }
    }



}

include _ROOT_PATH."/app/gen_view.php";



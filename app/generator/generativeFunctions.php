<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function generateSquare(&$result, $shapesize, $shapecharacter){
    for($i = 1; $i<=$shapesize; $i++){

                for($j = 0; $j<$shapesize; $j++){
                    $result=$result.$shapecharacter."&ensp;&ensp;";
                }    
                $result=$result."<br>";
    }
}

function generateStairs(&$result, $shapesize, $shapecharacter){
    for($i = 1; $i<=$shapesize; $i++){

                for($j = 0; $j<$i; $j++){
                    $result=$result.$shapecharacter;
                }    
                $result=$result."<br>";
    }
}
function generateTriangle(&$result, $shapesize, $shapecharacter){
    for($i = 1; $i<=$shapesize; $i++){

                for($j = 0; $j<($shapesize -$i); $j++){
                    $result=$result."&ensp;";
                }

                for($j = 0; $j<$i; $j++){
                    $result=$result.$shapecharacter.$shapecharacter;
                }    
                $result=$result."<br>";
    }
}

function generateRhombus(&$result, $shapesize, $shapecharacter){

    generateTriangle($result, $shapesize, $shapecharacter);

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
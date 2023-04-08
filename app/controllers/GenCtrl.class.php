<?php
namespace app\controllers;

use app\forms\GenForm;

class GenCtrl{
    
    private $genForm;
    private $result;
   
    public function __construct(){
        $this->genForm  = new GenForm();
        $this->result   = null;
    }
    
    public function action_generatorProcess(){
        $this->getParams();
        if($this->validateParams()){
           $this->process();
        }
        $this->action_generatorView();
    }

    private function getParams(){

        $this->genForm->shapecharacter = getFromRequest("shapecharacter");
        $this->genForm->shapesize = getFromRequest("shapesize");
        $this->genForm->shape = getFromRequest("shape");
        
        
    }
    

    private function validateParams(){
        
        if(!(isset($this->genForm->shapecharacter) && isset($this->genForm->shapesize) && isset($this->genForm->shape))){
            
            return false;
        }
        
        if($this->genForm->shapecharacter == ""){
            
            getMessages()->addError('Podano pusty znak');
        }
        if($this->genForm->shapesize == ""){
            getMessages()->addError('Podano pusty rozmiar');
        }


        if(getMessages()->isEmpty()){
                
            if (is_numeric($this->genForm->shapesize)) {
                return true;   
            }
            getMessages()->addError('Podany rozmiar nie jest liczbą');
        }

        return false;
    }

    
    private function process(){
        
        switch ($this->genForm->shape){
            case "square":
            generateSquare($this->result, $this->genForm->shapesize, $this->genForm->shapecharacter);
                break;

            case "stairs":
            generateStairs($this->result, $this->genForm->shapesize, $this->genForm->shapecharacter);
                break;

            case "triangle":
            generateTriangle($this->result, $this->genForm->shapesize, $this->genForm->shapecharacter);
                break;

            default:
            generateRhombus($this->result, $this->genForm->shapesize, $this->genForm->shapecharacter);

        }
        
    }
    
    public function action_generatorView(){
        getSmarty()->assign("title","Generator:>");
        getSmarty()->assign("genForm",$this->genForm);
        getSmarty()->assign("result",$this->result);
        getSmarty()->display("genView.tpl");
    }
    
    

}



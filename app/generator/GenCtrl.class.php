<?php

require_once 'GenForm.class.php';
require_once $conf->rootPath.'/libs/Messages.class.php';
require_once 'generativeFunctions.php';
require_once $conf->rootPath."/libs/smarty/Smarty.class.php";

class GenCtrl{
    
    private $genForm;
    private $messages;
    private $result;
   
    public function __construct(){
        $this->genForm  = new GenForm();
        $this->messages = new Messages();
        $this->result   = null;
    }
    
    public function runController(){
        $this->getParams();
        if($this->validateParams()){
           $this->process();
        }
        $this->generateView();
    }

    private function getParams(){
        
        $this->genForm->shapecharacter = isset($_REQUEST["shapecharacter"])?$_REQUEST["shapecharacter"]:null;
        $this->genForm->shapesize = isset($_REQUEST["shapesize"])?$_REQUEST["shapesize"]:null;
        $this->genForm->shape = isset($_REQUEST["shape"])?$_REQUEST["shape"]:null;
        
        
    }
    

    private function validateParams(){
        
        if(!(isset($this->genForm->shapecharacter) && isset($this->genForm->shapesize) && isset($this->genForm->shape))){
            
            return false;
        }
        
        if($this->genForm->shapecharacter == ""){
            $this->messages->addError('Podano pusty znak');
        }
        if($this->genForm->shapesize == ""){
            $this->messages->addError('Podano pusty rozmiar');
        }


        if($this->messages->isEmpty()){
                
            if (is_numeric($this->genForm->shapesize)) {
                return true;   
            }
            $this->messages->addError('Podany rozmiar nie jest liczbą');
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
    
    public function generateView(){
        global $conf;
        $smarty = new Smarty();
        
        $smarty->assign("title","Generator:>");
        $smarty->assign('conf',$conf);

        $smarty->assign("genForm",$this->genForm);
        $smarty->assign("messages",$this->messages);
        $smarty->assign("result",$this->result);
        //echo $result;
        $smarty->display($conf->rootPath."/app/generator/genView.tpl");
    }
    
    

}



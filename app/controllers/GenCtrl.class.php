<?php
namespace app\controllers;

use app\forms\GenForm;

class GenCtrl{
    
    private $genForm;
    private $result;
    private $tasksHistory;
    
    public function __construct(){
        $this->genForm  = new GenForm();
        $this->result   = null;
    }
    
    private function historyGetFromDB() {
        try {
           $this->tasksHistory= getDB()->select('tasks',[
               'resultID',
               'date',
               'char',
               'size',
               'shape'
           ]);
           
        } catch (\PDOException $exc) {
            if (getConf()->debug) echo getMessages()->addError($exc->getMessage());
        }
    }


    public function action_generatorRemove() {
        $removeId = getFromRequest("removeId");
        try {
            getDB() ->delete('tasks', [
               'resultID' => $removeId
           ]);
           
        } catch (\PDOException $exc) {
            if (getConf()->debug) echo getMessages()->addError($exc->getMessage());
        }
        $this->action_generatorView();

        
    }
    
    private function historyAdd(){
        
        try {
            getDB() ->insert('tasks', [
               'date'=> date("Y-m-d H:i:s"),
               'shape'=> $this->genForm->shape,
               'size'=> $this->genForm->shapesize,
               'char' => $this->genForm->shapecharacter,
           ]);
           
        } catch (\PDOException $exc) {
            if (getConf()->debug) echo getMessages()->addError($exc->getMessage());
        }



   
    }
    public function action_generatorProcess(){
        $this->getParams();
        if($this->validateParams()){
           $this->process();
           $this->historyAdd();
           
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
        $this->historyGetFromDB();
        getSmarty()->assign("title","Generator:>");
        getSmarty()->assign("genForm",$this->genForm);
        getSmarty()->assign("result",$this->result);
        getSmarty()->assign("history", $this->tasksHistory);
        getSmarty()->display("genView.tpl");
        
    }
    
  
    

}



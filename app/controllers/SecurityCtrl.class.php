<?php namespace app\controllers;

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
use app\forms\LoginForm as LFORM;

class SecurityCtrl {
    
    private $loginForm;
    
    public function __construct(){
        $this->loginForm  = new LFORM();
    }
    
    
    private function getParams(){
        $this->loginForm->login    = getFromRequest("login");
        $this->loginForm->password = getFromRequest("password");
    }

    private function validateParams(){

        if(!(isset($this->loginForm->login) && isset($this->loginForm->password))){
            return false;
        }
        if($this->loginForm->login == ""){
            getMessages()->addError("Puste pole login");
        }
        if($this->loginForm->password == ""){
            getMessages()->addError("Puste pole hasło");
        }

        if(count(getMessages()->getErrors())>0) return false;


        if ($this->loginForm->login == "admin" && $this->loginForm->password == "admin"){
            session_start();
            $_SESSION["role"] = "admin";
            $_SESSION["login"] = $this->loginForm->login;
            echo  "admin done";
            return true;
        }
        if ($this->loginForm->login == "user" && $this->loginForm->password == "1"){
            session_start();
            $_SESSION["role"] = "user";
            $_SESSION["login"] = $this->loginForm->login;
            return true;
        }

        getMessages()->addError("Błędnę hasło lub login :<");
        return false;
    }

    
    public function runController() {
        $this->getParams();
        if($this->validateParams()){

            header("Location: ". getConfig()->appURL);
        }
        else{

            getSmarty()->assign("title","Logowanko");

            //getSmarty()->assign("loginForm", $this->loginForm);
            getSmarty()->assign("onlyBody",true);


            getSmarty()->display("loginView.tpl");

        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    static function checkSession() {
        session_start();

        $role = isset($_SESSION['role'])?$_SESSION['role']:'';

        if($role==''){
            $security = new SecurityCtrl();
            $security->runController();
            exit();
        }
    }
    
    
    static function logout() {
        session_start();
        session_destroy();
        header("Location: ". getConfig()->appURL);

    }
    

    
}
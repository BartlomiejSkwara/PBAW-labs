<?php namespace app\controllers;

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
use app\forms\LoginForm as LFORM;
use app\transfer\User;
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
            $user = new User($this->loginForm->login, "admin");
            $_SESSION["user"] = serialize($user);
            addRole($user->role);
            return true;
        }
        if ($this->loginForm->login == "user" && $this->loginForm->password == "1"){
            $user = new User($this->loginForm->login, "user");
            $_SESSION["user"] = serialize($user);
            addRole($user->role);
            return true;
        }

        getMessages()->addError("Błędnę hasło lub login :<");
        return false;
    }

    
    public function action_login() {
        $this->getParams();
        if($this->validateParams()){
            //header("Location: ".getConfig()->actionURL."mainMenu");

            header("Location: ". getConfig()->appURL."/");
        }
        else{
            $this->generateView();
        }
    }
    
    private function generateView(){
        getSmarty()->assign("title","Logowanko");
        getSmarty()->assign("onlyBody",true);
        getSmarty()->display("loginView.tpl");
    }
    
    static function action_logout() {
        if(session_status()==PHP_SESSION_NONE){session_start();}
        session_destroy();
        header("Location: ". getConfig()->appURL);

    }
    

    
}
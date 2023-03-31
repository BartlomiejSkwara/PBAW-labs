<?php
namespace app\controllers;

use app\elements\MainMenuElement;


class MainMenuCtrl{

    private $menuElements = array();
    public function __construct(){

        $this->menuElements[]= new MainMenuElement("Generator Kształtów", 
                "Ten prost lecz \"skuteczny\" :> generator pozwoli ci na stworzenie wybronego przez ciebie kształtu korzystając z określonego przez ciebie znaku ASCII.",
                "generateView");
        $this->menuElements[]= new MainMenuElement("Test", 
                "Testowy opis , :> lorem ipsum dolor sit amet consect ...",
                "");
        $this->menuElements[]= new MainMenuElement("Test", 
                "Testowy opis , :> lorem ipsum dolor sit amet consect ...",
                "");
        $this->menuElements[]= new MainMenuElement("Test", 
                "Testowy opis , :> lorem ipsum dolor sit amet consect ...",
                "");
        
    }
    

    
    public function generateView(){

        getSmarty()->assign("title","MainMenu");
        getSmarty()->assign("elements",$this->menuElements);
        getSmarty()->display("mainMenuView.tpl");

    }
    
}
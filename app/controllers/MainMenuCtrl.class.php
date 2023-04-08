<?php
namespace app\controllers;

use app\elements\MainMenuElement;


class MainMenuCtrl{

    private $menuElements = array();
    public function __construct(){

        $this->menuElements[]= new MainMenuElement("Generator Kształtów", 
                "Ten prost lecz \"skuteczny\" :> generator pozwoli ci na stworzenie wybronego przez ciebie kształtu korzystając z określonego przez ciebie znaku ASCII.",
                "generatorView");
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
    

    
    public function action_mainMenu(){

        getSmarty()->assign("title","MainMenu");
        getSmarty()->assign("elements",$this->menuElements);
        getSmarty()->display("mainMenuView.tpl");

    }
    
}
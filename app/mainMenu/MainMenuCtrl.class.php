<?php
require_once $conf->rootPath."/libs/smarty/Smarty.class.php";
require_once "MainMenuElement.class.php";
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
        foreach ($this->menuElements as $value)
        {
        global $conf;
        $smarty = new Smarty();

        $smarty->assign("title","MainMenu");
        $smarty->assign("conf",$conf);
        $smarty->assign("elements",$this->menuElements);
        $smarty->display($conf->rootPath."/app/mainMenu/mainMenuView.tpl");}
    }
    
}
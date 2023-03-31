<?php

require_once "init.php"; 


$action = getFromRequest('action');
use app\controllers\MainMenuCtrl;
use app\controllers\GenCtrl;
use app\controllers\SecurityCtrl;

switch($action){
    
    case 'mainMenu' :
        SecurityCtrl::checkSession();
        $menu = new MainMenuCtrl();
        $menu->generateView();
        break;
    
    case 'generateView' :
        SecurityCtrl::checkSession();
        $gen = new GenCtrl();
        $gen->generateView();
        break;
    
    case 'generateProcess':
        SecurityCtrl::checkSession();
        $gen = new GenCtrl();
        $gen->runController();
        break;
    
    case 'logout':
        SecurityCtrl::logout();
        break;
    
    case 'login':
        $security = new SecurityCtrl();
        $security->runController();
        break;
    
    default :
        SecurityCtrl::checkSession();
        $menu = new MainMenuCtrl();
        $menu->generateView();
        break;

}

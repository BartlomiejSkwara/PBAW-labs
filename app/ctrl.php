<?php

require_once dirname(__FILE__)."/../config.php"; 
require_once $conf->rootPath."/app/generator/GenCtrl.class.php";
require_once $conf->rootPath."/app/mainMenu/MainMenuCtrl.class.php";

$action = isset($_REQUEST['action'])? $_REQUEST['action'] : null;

switch($action){
    
    case 'mainMenu' :
        include_once $conf->rootPath.'/app/security/checkSession.php';
        include_once $conf->rootPath.'/app/mainMenu/MainMenuCtrl.class.php';
        $menu = new MainMenuCtrl();
        $menu->generateView();
        break;
    
    case 'generateView' :
        include_once $conf->rootPath.'/app/security/checkSession.php';
        include_once $conf->rootPath.'/app/generator/GenCtrl.class.php';
        $gen = new GenCtrl();
        $gen->generateView();
        break;
    
    case 'generateProcess':
        include_once  $conf->rootPath.'/app/security/checkSession.php';
        include_once  $conf->rootPath.'/app/generator/GenCtrl.class.php';
        $gen = new GenCtrl();
        $gen->runController();
        break;
    
    case 'logout':
        include_once $conf->rootPath.'/app/security/logout.php';
        break;
    
    default :
        include_once $conf->rootPath.'/app/security/checkSession.php';
        include_once $conf->rootPath.'/app/mainMenu/MainMenuCtrl.class.php';
        $menu = new MainMenuCtrl();
        $menu->generateView();
        break;

}

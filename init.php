<?php
//ładuje config
// wczytuje parametr akcji
//definiuje funkcje dające dostęp do często używanych obiektó
// ładuje moje funkcje biblioteczne :>

require_once "core/Config.class.php";
$conf = new core\Config();
require_once "config.php";

function &getConfig(){    
    global $conf;
    return $conf;
};



require_once "core/Messages.class.php";
$messages = new core\Messages();

function &getMessages(){    
    global $messages;
    return $messages;
};


//TODO spytaj czy to ma sens  :>
$smarty = null;
function &getSmarty(){
    global $smarty;
    
    if(!isset($smarty)){
        include_once 'libs/smarty/Smarty.class.php';
        
        $smarty = new Smarty();
        $smarty->assign("conf", getConfig());
        $smarty->assign("messages", getMessages());
        
        
        
        $smarty->setTemplateDir(array(
                'one' => getConfig()->rootPath.'/app/views',
                'two' => getConfig()->rootPath.'/app/views/templates'
        ));
        
    }
    
    return $smarty;
}

require_once 'core/ClassLoader.class.php'; 
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}


require_once 'core/Router.class.php'; 
$router = new core\Router();
function &getRouter(): core\Router {
    global $router;
    return $router;
}


require_once 'core/functions.php';

session_start();
$conf->roles = isset($_SESSION["_roles"])? unserialize($_SESSION["_roles"]) : array();


$router->setAction(getFromRequest('action'));
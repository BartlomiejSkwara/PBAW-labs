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

$db = null;
function &getDB(){
    global $conf, $db;
    if (!isset($db)){
        require_once 'libs/medoo/Medoo.php';
        $db = new \Medoo\Medoo([
            'database_type' => &$conf->dbType,
            'server' => &$conf->dbServer,
            'database_name' => &$conf->dbName,
            'username' => &$conf->dbUser,
            'password' => &$conf->dbPass,
            'charset' => &$conf->dbCharset,
            'port' => &$conf->dbPort,
            'prefix' => &$conf->dbPrefix,
            'option' => &$conf->dbOption
        ]);
    }
    return $db;
}

require_once 'core/functions.php';

session_start();
$conf->roles = isset($_SESSION["_roles"])? unserialize($_SESSION["_roles"]) : array();


$router->setAction(getFromRequest('action'));
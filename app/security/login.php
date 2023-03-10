<?php
require_once dirname(__FILE__)."/../../config.php"; 
require_once _ROOT_PATH."/libs/smarty/Smarty.class.php";

//1.
function getLoginParams(&$loginForm){
    $loginForm["login"] = isset($_REQUEST["login"])?$_REQUEST["login"]:null;
    $loginForm["password"] = isset($_REQUEST["password"])?$_REQUEST["password"]:null;

}

//2.
function validateLoginParams(&$loginForm, &$messages){

    if(!(isset($loginForm["login"]) && isset($loginForm["password"]))){
        return false;
    }
    if($loginForm["login"] == ""){
        $messages [] = "Puste pole login";
    }
    if($loginForm["password"] == ""){
        $messages [] = "Puste pole hasło";
    }

    if(count($messages)>0) return false;
    

    if ($loginForm["login"] == "admin" && $loginForm["password"] == "admin"){
        session_start();
        $_SESSION["role"] = "admin";
        $_SESSION["login"] = $loginForm["login"];
        echo  "admin done";
        return true;
    }
    if ($loginForm["login"] == "user" && $loginForm["password"] == "1"){
        session_start();
        $_SESSION["role"] = "user";
        $_SESSION["login"] = $loginForm["login"];
        return true;
    }
        
    $messages[]= "Błędnę hasło lub login :<";
    return false;
}






$loginForm = [];
$messages = [];


getLoginParams($loginForm );
if(validateLoginParams($loginForm, $messages)){
    header("Location: "._APP_URL);
    echo "v1 validation complete";
}
else{
    $smarty = new Smarty();

    $smarty->assign("title","Logowanko");
    $smarty->assign('appURL',_APP_URL);
    $smarty->assign('rootPath',_ROOT_PATH);
    $smarty->assign('appRoot',_APP_ROOT);

    $smarty->assign("genForm",$loginForm);
    $smarty->assign("messages",$messages);
    $smarty->assign("onlyBody",true);

    
    $smarty->display(_ROOT_PATH."/app/security/loginView.tpl");

}





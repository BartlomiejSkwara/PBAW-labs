<?php 

function getFrom(&$source,&$idx,&$required,&$required_message){
	if (isset($source[$idx])){
		return $source[$idx];
	} else {
		if ($required) getMessages()->addError($required_message);
		return null;
	}
}


function getFromRequest($param_name,$required=false,$required_message=null){
	return getFrom($_REQUEST,$param_name,$required,$required_message);
}
function getFromGet($param_name,$required=false,$required_message=null){
	return getFrom($_GET,$param_name,$required,$required_message);
}
function getFromPost($param_name,$required=false,$required_message=null){
	return getFrom($_POST,$param_name,$required,$required_message);
}
function getFromCookies($param_name,$required=false,$required_message=null){
	return getFrom($_COOKIES,$param_name,$required,$required_message);
}
function getFromSession($param_name,$required=false,$required_message=null){
	return getFrom($_SESSION,$param_name,$required,$required_message);
}


function forwardTo($action_name){
	getRouter()->setAction($action_name);
	include getConfig()->rootPath."/ctrl.php";
	exit;
}

function redirectTo($action_name){
	header("Location: ". getConfig()->actionURL.$action_name);
	exit;
}

function addRole($role){
    if(is_array($role)){
        foreach ($role as $singleRole){
            getConfig()->roles[$singleRole]=true;
        }
        $_SESSION["_roles"] = serialize(getConfig()->roles);
    }
    else{
        getConfig()->roles[$role]=true;
        $_SESSION["_roles"] = serialize(getConfig()->roles);
    }

    
}

function inRole($role){
    return isset(getConfig()->roles[$role]);
}


function control($namespace, $controller, $method, $roles = null){
    if($roles!=null){
        $found = false;
        
        if(is_array($roles)){
            foreach($roles as $role){
                if(inRole($role)){
                    $found = true;
                    break;
                }
            }
        }
        else {
            if(inRole($roles)){
                $found = true;
            }
        }
        
        if(!$found){
            forwardTo(getConfig()->login_action);
        }
    }
    
    
    if (empty($namespace)){
        $controller = "app\\controllers\\".$controller;
    }
    else {
        $controller = $namespace."\\".$controller;
    }
    
    $ctrl = new $controller;
    
    if(is_callable(array($ctrl, $method))){
            $ctrl->$method();
    }
    exit();
    
}



function generateSquare(&$result, $shapesize, $shapecharacter){
    for($i = 1; $i<=$shapesize; $i++){

                for($j = 0; $j<$shapesize; $j++){
                    $result=$result.$shapecharacter."&ensp;&ensp;";
                    
                }    
                $result=$result."<br>";
    }
}

function generateStairs(&$result, $shapesize, $shapecharacter){
    for($i = 1; $i<=$shapesize; $i++){

                for($j = 0; $j<$i; $j++){ 
                    $result=$result.$shapecharacter;
                }    
                $result=$result."<br>";
    }
}
function generateTriangle(&$result, $shapesize, $shapecharacter){
    for($i = 1; $i<=$shapesize; $i++){

                for($j = 0; $j<($shapesize -$i); $j++){
                    $result=$result."&ensp;";
                }

                for($j = 0; $j<$i; $j++){
                    $result=$result.$shapecharacter.$shapecharacter;
                }    
                $result=$result."<br>";
    }
}

function generateRhombus(&$result, $shapesize, $shapecharacter){

    generateTriangle($result, $shapesize, $shapecharacter);

    for($i = 0; $i<=$shapesize; $i++){

                for($j = 0; $j<$i; $j++){
                    $result=$result."&ensp;";
                }

                for($j = 0; $j<($shapesize-$i); $j++){
                    $result=$result.$shapecharacter.$shapecharacter;
                }    
                $result=$result."<br>";
    }
}
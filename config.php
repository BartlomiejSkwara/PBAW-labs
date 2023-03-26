<?php

require_once "Config.class.php";

$conf = new Config();
$conf->rootPath=dirname(__FILE__);
$conf->serverName='localhost:80';
$conf->serverURL='http://'.$conf->serverName;
$conf->appRoot='/php_01_generator';
$conf->appURL=$conf->serverURL.$conf->appRoot;

$conf->actionRoot=$conf->appRoot.'/app/ctrl.php?action=';
$conf->actionURL=$conf->serverURL.$conf->actionRoot;
        

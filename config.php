<?php

$conf->serverName='localhost:80';
$conf->serverURL='http://'.$conf->serverName;
$conf->appRoot='/php_01_generator';

$conf->rootPath=dirname(__FILE__);
$conf->appURL=$conf->serverURL.$conf->appRoot;
$conf->actionRoot=$conf->appRoot.'/ctrl.php?action=';
$conf->actionURL=$conf->serverURL.$conf->actionRoot;
        

<?php
$conf->debug = true;

$conf->serverName='localhost:80';
$conf->serverURL='http://'.$conf->serverName;
$conf->appRoot='/php_01_generator';

$conf->rootPath=dirname(__FILE__);
$conf->appURL=$conf->serverURL.$conf->appRoot;
$conf->actionRoot=$conf->appRoot.'/ctrl.php?action=';
$conf->actionURL=$conf->serverURL.$conf->actionRoot;


$conf->dbType = 'mysql';
$conf->dbServer = 'localhost';
$conf->dbName = 'projekt';
$conf->dbUser = 'root';
$conf->dbPass = '';
$conf->dbCharset = 'utf8';

$conf->dbPort = '3306';
$conf->dbOption = [ PDO::ATTR_CASE => PDO::CASE_NATURAL, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];

<?php

session_start();

$role = isset($_SESSION['role'])?$_SESSION['role']:'';

if($role==''){
    include $conf->rootPath.'/app/security/login.php';
    exit();
}
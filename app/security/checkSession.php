<?php

session_start();

$role = isset($_SESSION['role'])?$_SESSION['role']:'';

if($role==''){
    include _ROOT_PATH.'/app/security/login.php';
    exit();
}
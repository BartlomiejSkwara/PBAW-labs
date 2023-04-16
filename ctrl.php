<?php

require_once "init.php"; 


getRouter()->setDefaultRoute('mainMenu');
getRouter()->setNoPermissionRoute('login');

getRouter()->addRoute('mainMenu','MainMenuCtrl',['user','admin']);
getRouter()->addRoute('generatorView','GenCtrl',['user','admin']);
getRouter()->addRoute('generatorRemove','GenCtrl',['user','admin']);
getRouter()->addRoute('generatorProcess','GenCtrl',['user','admin']);
getRouter()->addRoute('logout','SecurityCtrl',['user','admin']);
getRouter()->addRoute('login','SecurityCtrl');

getRouter()->go();
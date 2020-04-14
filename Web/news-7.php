<?php

//echo "Web/index.php";
//ajout pour commiter
require ('../Vendor/SplClassLoader.php');
$OCFramLoader = new SplClassLoader('Application', '../');
$OCFramLoader->register();

$LibLoader = new SplClassLoader('Lib', '../');
$LibLoader->register();

$TestLoader = new SplClassLoader('Test', '../');
$TestLoader->register();

use Application\Controller\IndexController;

$index = new IndexController();
$index->executeIndex();

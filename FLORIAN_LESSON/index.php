<?php
require_once 'global.functions.php';
/*
    Get the page attribute in the url path. Like that : http://localhost:8888/FLORIAN_LESSON/?page="Login"
    $_GET['nameAttributes'] is a GLOBAL var in PHP
 */
$get_attr_page = $_GET['page'];

switch ($get_attr_page) {
    case 'login':
        require_once 'Views/Login.php';
        break;

    default:
        customRedirectPage('login');
}
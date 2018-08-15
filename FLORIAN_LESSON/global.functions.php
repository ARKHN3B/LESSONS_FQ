<?php

// Use include when you don't care about the file to import
// include
// include_once
// Use require when you care to the file that you want to import
// require
require_once 'global.types.php';

function customRedirectPage(string $attr) {
    /* Inside, we have "localhost:8888" (string) */
    $http_host = $_SERVER['HTTP_HOST'];

//    $location = 'http://' . $http_host . '/FLORIAN_LESSON/' . ATTR';
    $location = "http://$http_host/FLORIAN_LESSON/" . ATTR . $attr; // string =>  http://localhost:8888/FLORIAN_LESSON/?page=Login

    /* This function redirects to the url we want */
    header("Location: $location");
}
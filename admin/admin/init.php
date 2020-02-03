<?php
include "connect.php";
// Routes

$tpl    = "includes/templates/"; // Template Directory
$lang   ="includes/languages/"; // Language Directory
$func   ="includes/functions/"; // Functions Directory
$css    = "layouts/css/" ;     //  Css Directory
$js     = "layouts/js/";      //  Js Directory


// include important files

include $func . "functions.php"; 
include $lang . "english.php"; 
include $tpl . 'header.php';

//include navbar on all pages excpet the one with $noNavBar variable 
//(! isset($noNavBar)) ?  include $tpl . 'navbar.php' : '';
 


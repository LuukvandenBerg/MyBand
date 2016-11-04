<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';
include 'includes/functs.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Red bull racing');

// Display template: output html
$templateParser->display('head.tpl');

//display template: output html
$templateParser->display('header.tpl');

$action = isset($_GET['action'])?$_GET['action']:'home';

switch($action) {
	case 'home':
		// Get newsarticles from database
		include('model/DriversDB.php');
		$templateParser->assign('result', $result);
		$templateParser->display('home.tpl');
		break;

	case 'max':
		$templateParser->display('max.tpl');
		break;

	case 'daniel':
	$templateParser->display('daniel.tpl');
	break;

	case 'schedule':
	include('model/Standings.php');
	$templateParser->display('schema.tpl');
	break;
}




//$templateParser->assign('footertext', 'Dit is een footer');

//$templateParser->display('footer.tpl');


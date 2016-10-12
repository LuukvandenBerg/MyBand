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
$templateParser->assign('title', 'Me First And The Gimme Gimmes');

// Display template: output html
$templateParser->display('head.tpl');

// asign headertext
$templateParser->assign('headertext', 'Dit is een header');

//display template: output html
$templateParser->display('header.tpl');

// Get newsarticles from database
//include('model/select_newsarticles.php');

//$templateParser->assign('result', $result);

//$templateParser->display('newsarticle.tpl');

$action = isset($_GET['action'])?$_GET['action']:'home';

switch($action) {
	case 'home':
		// Get newsarticles from database
		include('model/select_newsarticles.php');
		$templateParser->assign('result', $result);
		$templateParser->display('newsarticle.tpl');
		break;

	case 'about':
		$templateParser->display('about.tpl');
		break;
}




$templateParser->assign('footertext', 'Dit is een footer');

$templateParser->display('footer.tpl');


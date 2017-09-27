<?php

class Partner 
{
	public $name = "";
	public $image = "";
	public $website = "";
	public $color = "";
}

// DOCUMENTATION

// Use nl2br() and \n\n if you want a string with empty lines in it

$brightnetwork = new Partner();
$brightnetwork->name = 'Bright Network';
$brightnetwork->image = 'brightnetwork.png';
$brightnetwork->website = 'https://www.brightnetwork.co.uk/about-us/be-part-no1-careers-network/?utm_source=referral&utm_campaign=leic_compsci'; // Tracking link unique to CompSoc
$brightnetwork->color = '#232C2D';
$brightnetwork->description = nl2br("Your career is something that should always be on your mind during your University life, and Bright Network is here to help you prepare for the world of graduate jobs. \n\nSigning up through CompSoc helps us, and gives you access to a bunch of exclusive information, opportunities and events to give you an edge in the graduate jobs market. Best of all? It won\'t cost you a penny.");

// Resources from https://www2.le.ac.uk/offices/external/marcomms/creative/identity/visual-identity-quick-guide

$uol = new Partner();
$uol->name = 'Department for Informatics';
$uol->image = 'uol.png';
$uol->website = 'http://www2.le.ac.uk/departments/informatics';
$uol->color = '#ba0c2f';
$uol->description = "As a society, we work closely with the Department for Informatics at the University of Leicester to provide the best experience for our students, integrating much of what we do with the content of our courses, as well as providing socials and events that both students and staff attend.";

$bcs = new Partner();
$bcs->name = "BCS - The Chartered Institute of IT";
$bcs->image = "bcs_make.png";
$bcs->website = "http://bcs.org";
$bcs->color = "#0e7b37";
$bcs->description = "CompSoc is a registered BCS Student Chapter; which enables us to connect to the BCS's network of passionate students across the UK, opening opportunities for collaboration and more amongst all IT based disciplines.";

$partners = array($brightnetwork, $uol, $bcs);

?>
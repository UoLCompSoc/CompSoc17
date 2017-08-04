<?php

class Event 
{
	public $name = "";
	public $image = "";
}

$multiscience = new Event();
$multiscience->name = 'Multi-Science Barcrawl';
$multiscience->image = 'multiscience';

$bletchleypark = new Event();
$bletchleypark->name = 'Bletchley Park';
$bletchleypark->image = 'bletchleypark';

$football = new Event();
$football->name = 'CompSoc Football';
$football->image = 'football';

$events = array($multiscience, $bletchleypark, $football);

?>
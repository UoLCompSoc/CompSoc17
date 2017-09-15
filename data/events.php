<?php

class Event
{
	public $name = "";
	public $description = "";
	public $image = "";
}

$multiscience = new Event();
$multiscience->name = 'Headline';
$multiscience->description = 'AT THE UNIVERSITY OF LEICESTER';
$multiscience->image = 'multiscience.jpg';

$events = array($multiscience, $multiscience, $multiscience);

?>
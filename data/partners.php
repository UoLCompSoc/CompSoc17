<?php

class Partner {
	public $name = "";
	public $image = "";
	public $website = "";
}

$brightnetwork = new Partner();
$brightnetwork->name = 'Bright Network';
$brightnetwork->image = 'brightnetwork';
$brightnetwork->website = 'bbncreative.co';

$microsoft = new Partner();
$microsoft->name = 'Bright Network';
$microsoft->image = 'microsoft';
$microsoft->website = 'bbncreative.co';

$bloomberg = new Partner();
$bloomberg->name = 'Bright Network';
$bloomberg->image = 'bloomberg';
$bloomberg->website = 'bbncreative.co';

$partners = array($brightnetwork, $microsoft, $bloomberg);

?>
<?php

class Partner {
	public $name = "";
	public $image = "";
	public $website = "";
	public $color = "";
}

$brightnetwork = new Partner();
$brightnetwork->name = 'Bright Network';
$brightnetwork->image = 'brightnetwork.png';
$brightnetwork->website = 'https://brightnetwork.co.uk';
$brightnetwork->color = '#232C2D';

$digitalocean = new Partner();
$digitalocean->name = 'DigitalOcean';
$digitalocean->image = 'digitalocean.svg';
$digitalocean->website = 'https://digitalocean.com';
$digitalocean->color = '#0080FF';

$bloomberg = new Partner();
$bloomberg->name = 'Amazon';
$bloomberg->image = 'amazon.svg';
$bloomberg->website = 'https://amazon.co.uk';
$bloomberg->color = '#FF9900';

$partners = array($brightnetwork, $digitalocean, $bloomberg);

?>
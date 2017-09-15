<?php

class Person 
{
	public $name = "null";
	public $video = "placeholder.mp4";
	public $role = "null";
	public $interests = "🍆🍆🍆🍆";
	public $description = "null";
	public $github = "";
	public $website = "";
	public $linkedin = "";
	public $facebook = "";
	public $twitter = "";
	public $instagram = "";
}

$aaron = new Person();
$aaron->name = 'Aaron Cawte';
$aaron->video = 'aaron.mp4';
$aaron->role = 'President';
$aaron->interests = '​📸🎧🏳‍🌈😎';
$aaron->description = "I'm really into design for User Experience, and modern web technologies. Find me behind my camera (and occasionally in front of it), 8,000 lines deep into my own stylesheets, and stressing about things that aren't even important.";
$aaron->github = 'aaroncawte';
$aaron->website = 'https://bbncreative.co/';
$aaron->twitter = 'https://www.twitter.com/aaroncawte';
$aaron->instagram = 'https://www.instagram.com/aaroncawte';

$edward = new Person();
$edward->name = 'Edward Gardiner';
$edward->video = 'ed.mp4';
$edward->role = 'Secretary';
$edward->interests = '​😩🍆💦💯';
$edward->description = 'Short Boy';

$libby = new Person();
$libby->name = 'Libby Young';
$libby->video = 'libby.mp4';
$libby->role = 'Social Secretary';
$libby->interests = '​💯😇🍹💪';
$libby->description = "I'm a third year student studying Computer Science. I'm creative so will be able to come up with some great socials. I've been described by people as approachable and friendly. I have my own radio show, go to the gym and I'm a cheerleader. Sesh calls you got to answer.";
$libby->facebook = 'https://www.facebook.com/libby.young.161';
$libby->instagram = 'https://www.instagram.com/libby_young_/';
$libby->linkedin = 'https://www.linkedin.com/in/libby-young-490139115';

$toby = new Person();
$toby->name = 'Toby Drakesmith';
$toby->video = 'toby.mp4';
$toby->role = 'Sports Secretary';
$toby->interests = '⚽✈🍕🍺';
$toby->description = "I'm 22 years old, a mature student apparently 🤔. Heading into my second year at uni. Big football fan, and a fan of sports in general. Love to travel and have spent a lot of time the past few years doing just that! Also love beer.";

$louis = new Person();
$louis->name = 'Louis Hampton';
$louis->video = 'louis.mp4';
$louis->role = 'Treasurer';
$louis->interests = '🚅🎲🎹🍻';
$louis->description = "I've been a tech lover since I was very young, and I've always got a project going on or some idea that I can't keep quiet about! If you see me on campus I'm always available to chat about the society, programming, university matters, or just something you think I'd like to hear - feel free to stop me if you see me.";
$louis->github = 'roastveg';

$jan = new Person();
$jan->name = 'Jan Faracik';
$jan->video = 'paul.mp4';
$jan->role = 'Web Admin';
$jan->interests = '​🎧🥔🎮📷';
$jan->description = 'Example description goes here ya';
$jan->github = 'https://github.com/janfaracik';
$jan->website = 'https://janfaracik.me';
$jan->linkedin = 'https://www.linkedin.com/in/janfaracik';

$us = array($aaron, $edward, $libby, $toby, $louis, $jan);

?>
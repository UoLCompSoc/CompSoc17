<?php

class Person 
{
	public $name = "null";
	public $image = "";
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

// DOCUMENTATION

// Building a person couldn't be easier (at least in PHP), simply create a new Person object, fill its variables and then add it to the $us array. (Examples can be seen below)
// Use nl2br() and \n\n if you want a string with empty lines in it
// Avoid using emojis in descriptions as they can distract from the interests section
// Leave website links empty if you don't want to include them, CSS will automatically hide it

$aaron = new Person();
$aaron->name = 'Aaron Cawte';
$aaron->image = 'aaron.jpg';
$aaron->role = 'President';
$aaron->interests = '​📸🎧🏳‍🌈😎';
$aaron->description = nl2br("I'm really into design for User Experience, and modern web technologies. \n\nFind me behind my camera (and occasionally in front of it), 8,000 lines deep into my own stylesheets, and stressing about things that aren't even important.");
$aaron->github = 'aaroncawte';
$aaron->website = 'https://bbncreative.co/';
$aaron->twitter = 'https://www.twitter.com/aaroncawte';
$aaron->instagram = 'https://www.instagram.com/aaroncawte';

$edward = new Person();
$edward->name = 'Edward Gardiner';
$edward->image = 'edward.jpg';
$edward->role = 'Secretary';
$edward->interests = '​😩🍆💦💯';
$edward->description = nl2br("Really good at starting projects and then dropping them a few days later once the hype dies down. \n\nInterested in developing things that either do something cool or make something easier. \n\nHas many regrets over having other committee members choose his emojis above.");

$libby = new Person();
$libby->name = 'Libby Young';
$libby->image = 'libby.jpg';
$libby->role = 'Social Secretary';
$libby->interests = '​💯😇🍹💪';
$libby->description = nl2br("Often described by people as approachable and friendly. \n\nI have my own radio show, go to the gym and I'm a cheerleader. I'm creative so I'll be able to come up with some great socials. \n\nSesh calls you got to answer.");
$libby->facebook = 'https://www.facebook.com/libby.young.161';
$libby->instagram = 'https://www.instagram.com/libby_young_/';
$libby->linkedin = 'https://www.linkedin.com/in/libby-young-490139115';

$toby = new Person();
$toby->name = 'Toby Drakesmith';
$toby->image = 'toby.jpg';
$toby->role = 'Sports Secretary';
$toby->interests = '⚽✈🍕🍺';
$toby->description = nl2br("I'm 22 years old, a mature student apparently. Heading into my second year at uni. Big football fan, and a fan of sports in general. \n\nLove to travel and have spent a lot of time the past few years doing just that! Also love beer.");

$louis = new Person();
$louis->name = 'Louis Hampton';
$louis->image = 'louis.jpg';
$louis->role = 'Treasurer';
$louis->interests = '🚅🎲🎹🍻';
$louis->description = nl2br("I've been a tech lover since I was very young, and I've always got a project going on or some idea that I can't keep quiet about! \n\nFeel free to stop me if you see me as I'm always happy to chat about the society, programming or university matters.");
$louis->github = 'roastveg';

$jan = new Person();
$jan->name = 'Jan Faracik';
$jan->image = 'jan.jpg';
$jan->role = 'Web Admin';
$jan->interests = '​🎧🥔🎮📷';
$jan->description = nl2br("Huge nerd. Lover of music, design and tech. \n\nI'll often be seen working on my own projects, wrapping up university ones or fretting over the big world out there. \n\nI'll let you know how it goes...");
$jan->github = 'https://github.com/janfaracik';
$jan->website = 'https://janfaracik.me';
$jan->linkedin = 'https://www.linkedin.com/in/janfaracik';

$us = array($aaron, $edward, $libby, $toby, $louis, $jan);

?>
<?php

class Person {
	public $name = "";
	public $image = "";
	public $role = "";
	public $description = "";
	public $github = "";
	public $website = "";
}

$aaron = new Person();
$aaron->name = 'Aaron Cawte';
$aaron->image = 'aaron';
$aaron->role = 'President';
$aaron->description = 'A bit trash really';
$aaron->github = 'aaroncawte';
$aaron->website = 'bbncreative.co';

$edward = new Person();
$edward->name = 'Edward Gardiner';
$edward->image = 'edward';
$edward->role = 'Secretary';
$edward->description = 'asd';
$edward->github = '';
$edward->website = '';

$libby = new Person();
$libby->name = 'Libby Young';
$libby->image = 'libby';
$libby->role = 'Social Secretary';
$libby->description = 'asd';
$libby->github = 'libbyky';
$libby->website = '';

$toby = new Person();
$toby->name = 'Toby Drakesmith';
$toby->image = 'toby';
$toby->role = 'Sports Secretary';
$toby->description = 'asd';
$toby->github = '';
$toby->website = '';

$louis = new Person();
$louis->name = 'Louis Hampton';
$louis->image = 'louis';
$louis->role = 'Treasurer';
$louis->description = 'asd';
$louis->github = 'roastveg';
$louis->website = '';

$jan = new Person();
$jan->name = 'Jan Faracik';
$jan->image = 'jan';
$jan->role = 'Web Admin';
$jan->description = 'Web Adasdmin';
$jan->github = 'janfaracik';
$jan->website = 'janfaracik.me';

$us = array($aaron, $edward, $libby, $toby, $louis, $jan);

?>
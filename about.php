<?php

	class Person {
    	public $name = "";
    	public $image = "";
    	public $description = "";
	}

	$aaron = new Person();
	$aaron->name = 'Aaron Cawte';
	$aaron->image = 'aaron';
	$aaron->description = 'President';

	$edward = new Person();
	$edward->name = 'Edward Gardiner';
	$edward->image = 'edward';
	$edward->description = 'Secretary';

	$libby = new Person();
	$libby->name = 'Libby Young';
	$libby->image = 'libby';
	$libby->description = 'Social Secretary';

	$louis = new Person();
	$louis->name = 'Louis Hampton';
	$louis->image = 'louis';
	$louis->description = 'Money Person';

	$toby = new Person();
	$toby->name = 'Toby Drakesmith';
	$toby->image = 'toby';
	$toby->description = 'Sports Secretary';

	$jan = new Person();
	$jan->name = 'Jan Faracik';
	$jan->image = 'jan';
	$jan->description = 'Web Admin';

	$team = array($aaron, $edward, $libby, $louis, $toby, $jan);

    require_once __DIR__.'/backend/preload.php';
    $page['title'] = 'About | CompSoc';
    include $template['header'];

?>

<h1>About</h1>

<?php

foreach ($team as $person) {

    echo "<div class='person'>

	<div class='person_img'>
		<img src='assets/team/" . $person->image . ".jpg'/>
	</div>

	<p class='person_name'>" . $person->name . "</p>
	<p class='person_description'>" . $person->description . "</p>

</div>";


}

?>

<?php
    include $template['footer'];
?>
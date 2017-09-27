<?php
    require_once __DIR__.'/backend/preload.php';
    include "data/us.php";
    include "data/partners.php";
    $page['title'] = 'CompSoc at the University of Leicester';
    include $template['header'];
?>

	<?php 

		//Follow to get a new permanent access token https://stackoverflow.com/a/28418469

		$fb_page_id = "218213561565638"; 
		$access_token = "";

		//Read access token from file

		$fh = fopen('data/access_token.txt','r');
		while ($line = fgets($fh)) 
		{
			$access_token = $line;
		}
		fclose($fh);

		$page = file_get_contents('https://graph.facebook.com/v2.10/' . $fb_page_id . '/events?limit=1&access_token=' . $access_token);

		$page = json_decode($page);

		//DateTime of latest event

		$dt = new DateTime($page->data[0]->start_time, new DateTimeZone('PST'));
		$dt->setTimezone(new DateTimeZone('Europe/London'));

		//Get date of today

		$today = new DateTime(); // This object represents current date/time
		$today->setTime( 0, 0, 0 ); // reset time part, to prevent partial comparison

		$diff = $today->diff( $dt );
		$diffDays = (integer)$diff->format( "%R%a" ); // Extract days count in interval

		switch($diffDays) 
		{
		    case 0:
			    echo "<a href='https://www.facebook.com/events/" . $page->data[0]->id . "' id='event_alert'>";
			    echo "<p id='event_header'>EVENT TODAY</p>";
			    echo "<p>" . $page->data[0]->name . ' - ' . $dt->format('H:i') . "</p>";
			    echo "</a>";
		        break;
		    case +1:
			    echo "<a href='https://www.facebook.com/events/" . $page->data[0]->id . "' id='event_alert'>";
		    	echo "<p id='event_header'>EVENT TOMORROW</p>";
		    	echo "<p>" . $page->data[0]->name . ' - ' . $dt->format('H:i') . "</p>";
		    	echo "</a>";
		        break;
		    default:

		}

	?>
	
<header>
	<div id="header_inner">
		<div id="mobile_header">
			<h3>CompSoc 17</h3>
			<img src="assets/logo_small.png"/>
		</div>
		<h1 id="page_title">Welcome</h1>
		<div id="header_social">
			<a href="https://www.facebook.com/UoLCompSoc" class="fa fa-facebook"></a>
			<a href="https://twitter.com/UoLCompSoc" class="fa fa-twitter"></a>
			<a href="https://www.instagram.com/UoLCompSoc/" class="fa fa-instagram"></a>
			<a href="https://github.com/UoLCompSoc" class="fa fa-github"></a>
		</div>
	</div>
	<div id="hamburger" onclick="showHideHamburger()">
	  <span></span>
	  <span></span>
	  <span></span>
	  <span></span>
	</div>
</header>

<div id="hamburger_menu">
	<div id="hamburger_menu_inner">
		<a onclick="showHome()">Home</a>
		<a onclick="showEvents()">Events</a>
		<a onclick="showUs()">Meet Us</a>
		<a onclick="showSponsors()">Sponsors</a>
	</div>
</div>

<section id="welcome_section" class="section">
	<div class="section_inner">

		<img class="full_width_image" src="assets/compsoc.jpg"/>

		<p>CompSoc is the University of Leicester's leading technology enthusiast society.</p>

		<p>We host academic sessions, run amazing socials, play football in our society team and do so much more for students of all subjects.</p>

		<p>If you're a technology fan, STEM student, gamer or just down for a good night out, you've come to the right place!</p>

		<p>Joining only costs £3 so join today at the link below or in person at one of our events.</p>

		<a href="Join" id="join_button">
			Join
		</a>

	</div>
</section>

<section id="events_section" class="section">
	<div class="section_inner">

		<p class="section_header">Events</p>

		<p class="section_header_small">UPCOMING</p>

		<div class="grid" id="events">
			<?php
				$page = file_get_contents('https://graph.facebook.com/v2.10/' . $fb_page_id . '/events?time_filter=upcoming&access_token=' . $access_token);

				$page = json_decode($page);

				$noevents = "No upcoming events. Check back later 😊";

				foreach($page->data as $event)
				{
					$noevents = "";

				    echo "<a href='https://www.facebook.com/events/" . $event->id . "' class='event' style='background-image: url(http://graph.facebook.com/" . $event->id . "/picture?type=large);'>";

				    echo "<p class='card_title'>" . $event->name . "</p>";

					$dt = new DateTime($event->start_time, new DateTimeZone('PST'));
					$dt->setTimezone(new DateTimeZone('Europe/London'));

				    echo "<p class='card_description'>" . $dt->format('H:i d/m/Y') . "</p>";
				    echo "</a>";
				}

			?>
		</div>

		<?php
			echo "<p>" . $noevents . "</p>";
		?>

		<div style="position: relative;">
			<p class="section_header_small">PAST</p>
			<a href="https://www.facebook.com/218213561565638/events" style="position: absolute; right: 0; top: 0;" class="section_header_small">VIEW ALL</a>
		</div>

		<div class="grid" id="events">
			<?php
				$page = file_get_contents('https://graph.facebook.com/v2.10/' . $fb_page_id . '/events?limit=3&time_filter=past&access_token=' . $access_token);

				$page = json_decode($page);

				foreach($page->data as $event)
				{
				    echo "<a href='https://www.facebook.com/events/" . $event->id . "' class='event' style='background-image: url(http://graph.facebook.com/" . $event->id . "/picture?type=large);'>";

				    echo "<p class='card_title' style='padding-right: 30px;'>" . $event->name . "</p>";

					$dt = new DateTime($event->start_time, new DateTimeZone('PST'));
					$dt->setTimezone(new DateTimeZone('Europe/London'));

				    echo "<p class='card_description'>" . $dt->format('H:i d/m/Y') . "</p>";
				    echo "</a>";
				}
			?>
		</div>

	</div>
</section>

<section id="people_section" class="section">
	<div class="section_inner">
	
		<p class="section_header">Meet your CompSoc</p>

		<div class="grid" id="people">
				<?php
					foreach ($us as $person) 
					{
						echo "<div class='person' style='background-image: url(assets/us/" . $person->image . ");'>
								<div class='person_inner'>
									<div class='person_inner_top'>
										<p class='card_title'>" . $person->name . "</p>
										<p class='card_description'>" . $person->role . "</p>
									</div>
									<div class='person_inner_bottom'>
										<p class='person_interests'>" . $person->interests . "</p>
										<p class='person_description'>" . $person->description . "</p>
										<a class='person_link person_website' href='". $person->website ."'></a>
										<a class='person_link person_github' href='". $person->github ."'></a>
										<a class='person_link person_linkedin' href='". $person->linkedin ."'></a>
										<a class='person_link person_facebook' href='". $person->facebook ."'></a>
										<a class='person_link person_twitter' href='". $person->twitter ."'></a>
										<a class='person_link person_instagram' href='". $person->instagram ."'></a>
									</div>
								</div>
							</div>";
					}
				?>
		</div>

	</div>
</section>

<section id="partners_section" class="section">
	<div class="section_inner">
	
		<p class="section_header">Meet our Partners</p>

		<div class="grid" id="partners">
			<?php	
				foreach ($partners as $partner) 
				{
					echo "<a href='" . $partner->website . "' class='partner' title='" . $partner->name . "' style='background-size: contain; background-color:" . $partner->color . ";'>
						<img src='assets/partners/" . $partner->image . "'/>
					</a>";
				}
			?>
		</div>
    <?php
      foreach ($partners as $partner)
      {
        echo "<h2>$partner->name</h2><p>$partner->description</p>";
      }
    ?>

	</div>
</section>

<script src="js/index.js" type="text/javascript"></script>

<?php
    include $template['footer'];
?>
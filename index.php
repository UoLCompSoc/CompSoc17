<?php
    require_once __DIR__.'/backend/preload.php';
    include "data/us.php";
    include "data/events.php";
    include "data/partners.php";
    $page['title'] = 'CompSoc at the University of Leicester';
    include $template['header'];
?>

<div id="background1"></div>
<div id="background2"></div>
<div id="background3"></div>

<div id="background_noise"></div>

<script>

function fadeOnPercentage(percentage)
{
	var currentScroll = $(document).scrollTop();
	return Math.min(1, Math.max((currentScroll - ($(document).height() * percentage)) / 1000, 0));
}

$(window).scroll(function()
{
   $("#background2").css('opacity', fadeOnPercentage(0));
   $("#arrow").css('opacity', 1 - (fadeOnPercentage(0) * 2));
   $("#background3").css('opacity', fadeOnPercentage(0.36));
});

function showWhyJoin()
{    
	console.log("swag");
    $("#events_section").fadeIn(200);
    $("#people_section").hide();
    $("#partners_section").hide();
}

function showUs()
{    
    $("#events_section").hide();
    $("#people_section").fadeIn(200);
    $("#partners_section").hide();
}

function showSponsors()
{    
    $("#events_section").hide();
    $("#people_section").hide();
    $("#partners_section").fadeIn(200);
}

</script>

<div id="landing">
	<h3>WELCOME TO</h3>
	<h1>CompSoc 17</h1>
	<div id="arrow">
		<img src="assets/arrow.svg"/>
	</div>
</div>

<nav>
<a onclick="showWhyJoin()">Why Join?</a>
<a onclick="showUs()">Us</a>
<a onclick="showSponsors()">Sponsors</a>
</nav>

<section id="events_section">
	<div class="section_inner">

		<p class="section_header" style="display: none;">Why Join?</p>

		<div class="grid" id="events">	

			<div class='event large_event'>
				<div class="event_bg"></div>
				<p class='card_title'>Sleep Well Beast</p>
				<p class='card_description'></p>
			</div>		

			<a class='event'>
				<div class="event_bg"></div>
				<p class='card_title'>Events</p>
			</a>

			<a class='event'>
				<div class="event_bg"></div>
				<p class='card_title'>Blog</p>
			</a>

			<a class='event'>
				<div class="event_bg"></div>
				<p class='card_title'>Join</p>
			</a>

		</div>

	</div>
</section>

<section id="people_section">
	<div class="section_inner">
	
		<p class="section_header">Meet your CompSoc</p>

		<div class="grid" id="people">
				<?php
					foreach ($us as $person) 
					{
						echo "<div class='person'>
									<video autoplay loop>
  										<source src='assets/us/" . $person->video . "' type='video/mp4'>
									</video>
									<div class='person_inner'>
										<div class='person_inner_padding'>
											<p class='person_name'>" . $person->name . "</p>
											<p class='person_role'>" . $person->role . "</p>
											<div class='person_details'>
												<p class='person_role'>Interests</p>
												<p class='person_interests'>" . $person->interests . "</p>
												<p class='person_role'>Description</p>
												<p class='person_description'>" . $person->description . "</p>
												<a class='person_link person_website' href='". $person->website ."'></a>
												<a class='person_link person_github' href='". $person->github ."'></a>
												<a class='person_link person_linkedin' href='". $person->linkedin ."'></a>
												<a class='person_link person_facebook' href='". $person->facebook ."'></a>
												<a class='person_link person_twitter' href='". $person->twitter ."'></a>
												<a class='person_link person_instagram' href='". $person->instagram ."'></a>
											</div>
										</div>
									</div>
							</div>";
					}
				?>
		</div>

	</div>
</section>

<section id="partners_section">
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

		<div class="section_description">
			<p class="section_description_header">We wouldn't be here without them</p>
			<p>short section on the events that we have</p>
			<p class="section_description_header" style="margin-top: 40px;">Keep in touch</p>
			<p>follow us on facebook, twitter, instagram</p>
			</div>
		</div>

	</div>
</section>

<?php
    include $template['footer'];
?>
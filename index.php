<?php
    require_once __DIR__.'/backend/preload.php';
    include "data/us.php";
    include "data/events.php";
    include "data/partners.php";
    $page['title'] = 'CompSoc at the University of Leicester';
    include $template['header'];
?>

<script>
	$(window).scroll(function () {
		var scrollTop = $(window).scrollTop();
		var windowHeight = $(window).height();

		if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)))
		{
			$('#landing_bg').css({
				'transform': 'translate(0px,' + scrollTop / 2 + 'px)'
			});
			$('#landing').css({
				'opacity': 1 - scrollTop / (windowHeight / 5)
			});
		}
	});
</script>

<div id="landing_bg"></div>

<div id="landing">
	<h3>WELCOME TO</h3>
	<h1>CompSoc 17</h1>
		<div id="arrow">
		<svg width="30px" height="11px" class="fadein_4">
			<path class="st0" d="M15,11c0.196,0,12.542-4.568,12.542-4.568c1.8-0.696,2.843-2.639,2.326-4.349
			c-0.511-1.708-2.386-2.528-4.186-1.839L15,4.351L4.319,0.244C2.518-0.445,0.644,0.375,0.133,2.083
			c-0.518,1.71,0.526,3.653,2.326,4.349C2.458,6.432,14.737,11,15,11z"/>
		</svg>
	</div>
</div>

<section>
	<div class="section_inner">

		<p class="section_header">Why Join?</p>

		<div class="section_carousel">
			<div class="section_carousel_blur">
				<?php
					foreach ($events as $event) 
					{
						echo "<div class='card' style='background-image: url(assets/events/" . $event->image . ".jpg);'></div>";
					}
				?>
			</div>
			<div class="section_carousel_main">
				<?php
					foreach ($events as $event) 
					{
						echo "<div class='card card_gradient' style='background-image: url(assets/events/" . $event->image . ".jpg);'>"
						.
						"<p class='card_name'>" . $event->name . "</p>"
						.
						"</div>";
					}
				?>
			</div>
		</div>

		<div class="section_description">
			<p class="section_description_header">example header</p>
			<p>short section on the events that we have</p>
			<p class="section_description_header" style="margin-top: 40px;">Keep in touch</p>
			<p>follow us on facebook, twitter, instagram</p>
			</div>
		</div>

	</div>
</section>

<section>
	<div class="section_inner">
	
		<p class="section_header">Meet your CompSoc</p>

		<div class="section_carousel">
			<div class="section_carousel_blur">
				<?php
					foreach ($us as $person) 
					{
						echo "<div class='card' style='background-image: url(assets/us/" . $person->image . ".jpg);'>"
						.
						"<p class='card_name'>" . $person->name . "</p>"
						.
						"<p class='person_role'>" . $person->role . "</p>"
						.
						"</div>";
					}
				?>
			</div>
			<div class="section_carousel_main">
				<?php
					foreach ($us as $person) 
					{
						echo "<div class='card card_gradient person_card' style='background-image: url(assets/us/" . $person->image . ".jpg);'>"
						.
						"<p class='person_name'>" . $person->name . "</p>"
						.
						"<p class='person_role'>" . $person->role . "</p>"
						.
						"</div>";
					}
				?>
			</div>
		</div>

		<div class="section_description">
			<p class="section_description_header">example header</p>
			<p>short section on the events that we have</p>
			<p class="section_description_header" style="margin-top: 40px;">Keep in touch</p>
			<p>follow us on facebook, twitter, instagram</p>
			</div>
		</div>

	</div>
</section>

<section>
	<div class="section_inner">
	
		<p class="section_header">Meet our Partners</p>

		<div class="section_carousel">
			<div class="section_carousel_blur" style="opacity: 0.5;">
				<?php
					foreach ($partners as $partner) 
					{
						echo "<div class='card' style='background-image: url(assets/partners/" . $partner->image . ".png);'></div>";
					}
				?>
			</div>
			<div class="section_carousel_main">
				<?php	
					foreach ($partners as $partner) 
					{
						echo "<div class='card' style='background-image: url(assets/partners/" . $partner->image . ".png);'></div>";
					}
				?>
			</div>
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
$( document ).ready(function() 
{
	var now = new Date();
	if (now.getHours() >= 20 || now.getHours() < 07)
	{
		document.body.classList.add('darkmode');
	}
});

function showHome()
{    
    $("#welcome_section").fadeIn(200);
    $("#events_section").hide();
    $("#people_section").hide();
    $("#partners_section").hide();
    $("#hamburger_menu").hide();
    document.getElementById("page_title").innerHTML = "Welcome";
	$('#hamburger').removeClass('open');
}

function showEvents()
{    
    $("#welcome_section").hide();
    $("#events_section").fadeIn(200);
    $("#people_section").hide();
    $("#partners_section").hide();
    $("#hamburger_menu").hide();
    document.getElementById("page_title").innerHTML = "Events";
	$('#hamburger').removeClass('open');
}

function showUs()
{    
    $("#welcome_section").hide();
    $("#events_section").hide();
    $("#people_section").fadeIn(200);
    $("#partners_section").hide();
    $("#hamburger_menu").hide();
    document.getElementById("page_title").innerHTML = "Meet Us";
	$('#hamburger').removeClass('open');
}

function showSponsors()
{    
    $("#welcome_section").hide();
    $("#events_section").hide();
    $("#people_section").hide();
    $("#partners_section").fadeIn(200);
    $("#hamburger_menu").hide();
    document.getElementById("page_title").innerHTML = "Sponsors";
	$('#hamburger').removeClass('open');
}

$(document).ready(function(){
	$('#hamburger').click(function(){
		$(this).toggleClass('open');
	});
});

function showHideHamburger()
{    
    $("#hamburger_menu").fadeToggle(150);
}
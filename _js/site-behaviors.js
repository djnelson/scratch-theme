// Simple jQuery functions to control some site behaviors

$(document).ready(function() {

	$("#menuToggle").click(function() {
		$("#mainNavLinks").toggleClass("hideElement");
	});

	Simple animation of the stars over the hero image on the homepage
	$("#stars").hide().fadeIn(1000, "swing");

	// Hide sign-in form at page load
	$("#signIn").hide();
	// Displany sign-in form when the "Book Your Trip Now!" button is clicked
	$("#bookBtn").click(function() {
		$("#signIn").slideDown("slow");
		// Prevents page from scrolling when above button is clicked
		return false;
	});

	$("#submit").click(function(){
		// Displays simple pop-up
		alert("This button currently only shows this alert.");
		// Prevents page from scrolling when "Login" button is clicked
		return false;
	});

	$("#registerLink").click(function(){
		return false;
	});

});

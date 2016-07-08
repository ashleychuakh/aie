"use strict"
$(function() {
	$(".button-collapse").sideNav();

	$(".dropdown-button").dropdown({
		belowOrigin: true, // Displays dropdown below the button
	});

	$('.datepicker').pickadate({
	    selectMonths: true // Creates a dropdown to control month
	  });

	$('#return-to-top').click(function() {      // When arrow is clicked
	    $('body,html').animate({
	        scrollTop : 0                       // Scroll to top of body
	    }, 800);
	});
});
/*!
=========================================================


* Copyright: 2019 Kunwar Ahlawat
* Licensed: Kunwar Ahlawat
* Coded by Kunwar Ahlawat

=========================================================

*/

// smooth scroll
$(document).ready(function () {
	$(".nav-link").on('click', function (event) {

		if (this.hash !== "") {

			event.preventDefault();

			var hash = this.hash;

			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 700, function () {
				window.location.hash = hash;
			});
		}
	});
});
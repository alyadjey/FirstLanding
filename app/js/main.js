'use strict'
$(document).ready(() => {
	$('#burgerButton').on('click', () => {
		$('#navLinks').toggleClass('d-none')
	})
	$("#send").click(function (e) {
		console.log($("#formMain").serialize())
		event.preventDefault()
		$(this).prop("disabled", true)
		$.ajax({
			type: "POST",
			url: "../mail.php",
			dataType: "html",
			data: $("#formMain").serialize(),
			success: function (data) {
				$("#output").text(data)
				console.log("SUCCESS : ", data)
				$("#send").prop("disabled", false)
			},
			error: function (e) {
				$("output").text(e.responseText)
				console.log("ERROR : ", e)
				$("#send").prop("disabled", false)
			}
		})
	})


	// $()	

	var links = document.querySelectorAll('.scroll-to');

	for (var link of links) {

		link.addEventListener('click', function (e) {
			e.preventDefault();
			document.querySelector(this.hash).scrollIntoView({ block: "start", behavior: "smooth" });
		});

	}

	document.addEventListener('scroll', function () {
		if (window.scrollY > 480 && !(document.querySelector('.header').classList.contains('fixed-header'))) {
			document.querySelector('.header').classList.add('fixed-header')
		}
		else if (window.scrollY < 480 && document.querySelector('.header').classList.contains('fixed-header')) {
			document.querySelector('.header').classList.remove('fixed-header')
		}
	});


})

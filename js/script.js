
		$(document).ready(function() {
			var windowHeight = $(window).height();
			$(".contentContainer").css("min-height", windowHeight);
		});



		$(document).ready(function() {
			$('button').click(function(event) {
				event.preventDefault();
				$(".alert").hide();
				var city = $("#city").val();
				var regExp;
				if (city == "") {
					$("#noCity").fadeIn();
				} else {
					$.get("scraper.php?city=" + city, function( data ) {
						regExp = data.search("Warning");
						if(regExp === 10) {
							$("#danger").fadeIn();
						} else {
							$("#success").html(data).fadeIn();
						}
					});
				}
			});
		});

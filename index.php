<?php
	require_once('includes/header.php'); 
?>

<body>
	
<div class="container contentContainer" id="topContainer">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 center">
			<h1 class="center white">Weather Scraper</h1>

			<p class="lead center white">This application will predict the weather near you!</p>

			<form>

				<div class="form-group">
					<input class="form-control" type="text" name="city" id="city" placeholder="Eg. London, Paris, San Francisco..." />
				</div>

				<button type="submit" class="btn btn-success btn-lg">Find My Weather</button>

			</form>

			<div id="success" class="alert alert-success">

			</div>

			<div id="danger" class="alert alert-danger">
				Sorry, you entered a wrong city.
			</div>

			<div id="noCity" class="alert alert-danger">
				Please enter a city.
			</div>

		</div>

	</div>
</div> <!-- End of .container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>

</body>

</html>

<?php
    $weather = "";
    $error = "";
    if(array_key_exists('city', $_GET)) {
        $city = str_replace(' ', '', $_GET['city']);
        $file_headers = @get_headers("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            $error = "That city could not be found.";
        } else {
            $forecastPage = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
            $pageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);
            if(sizeof ($pageArray) > 1) {
                $secondPageArray = explode('</span></span></span>', $pageArray[1]);
                if(sizeof($secondPageArray) > 1) {
                    $weather = $secondPageArray[0];
                } else {
                    $error = "That city could not be found.";
                }
            } else {
                $error = "That city could not be found.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	
		<!-- Required meta tags always come first -->
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1" />
		 <meta http-equiv="x-ua-compatible" content="ie=edge">

	  	<title>Weather Scraper</title>
		 <!-- Bootstrap CSS -->	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">

	</head>
	
<body>

	



  

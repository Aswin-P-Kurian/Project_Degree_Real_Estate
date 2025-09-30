<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">
	
	<!-- HEAD TAG STARTS -->

	<head>
	
  		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
		<title>About Us | tourism_management</title>
    
    	<link href="css/main.css" rel="stylesheet">
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400|Raleway:100,300,400,500|Roboto:100,400,500,700" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    	<script src="js/jquery-3.2.1.min.js"></script>
    	<script src="js/main.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	
	</head>
	
	<!-- HEAD TAG ENDS -->
	
	<!-- BODY TAG STARTS -->
	
	<body>
		
		<?php 
		
			if(!isset($_SESSION["username"])) {
				include("common/headerLoggedOut.php");
			}
			else {
				include("common/headerLoggedIn.php");
			}
		
		?>
		
		<div class="spacer">a</div>
		
		<div class="col-sm-12 aboutUsWrapper">
			
			<div class="headingOne">
				
				About Us
				
			</div>
			
			<div class="para">
				<!--dummy description---->
				Travel Mate is an online travel platform that brings high-value and rewarding travel experiences to people all over the world through the Travel mate and Travel Mate website.
 Our mission is to empower everyone to be a traveler by offering affordable deals on hotels, flights, activities, and more, with an  booking experience that is hassle-free from start to finish.
Since the travel mate company was founded in 2022, we’ve made searching and booking travel as easy and stress-free as it should be.
Travel Mate is now considered one of india's leading travel-tech companies with lots of registered customers supported by a truly diverse team and Travel Mate customer service available 24/7. 
				
			</div>
			
		</div> <!-- paymentWrapper -->
	
	<div class="spacerLarge">.</div> <!-- just a dummy class for creating some space -->
			
		<?php include("common/footer.php"); ?>
				
	</body>
	
	<!-- BODY TAG ENDS -->
	
</html>
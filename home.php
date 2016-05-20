<?php
// on se connecte à notre base
$base = mysql_connect ('127.0.0.1', 'aurelien', 'e2c69120');
mysql_select_db ('participant', $base) ;
?>
<html>

<head>
	<meta charset="utf-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<link rel="stylesheet" href="style4.css" />



</head>

<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="">
					<img alt="Brand" src="orange.1.png">
				</a>
			
			</div>
		</div>
	</nav>

	


	<div class="container">

		<ul class="nav nav-pills">
		  <li role="presentation" class="active"><a href="home.php">Home</a></li>
		  <li role="presentation"><a href="event.php">Information</a></li>
		  <li role="presentation"><a href="inscription.php">inscription</a></li>
		</ul>
	</div>
	

	<!-- Tab panes -->
				<h1 class="accroche">Venez dansez au pied de la Tour Part Dieu, le 21 Juin prochain !</h1>
	
				<div class="row">
					<div id="banderole band">
				
				<div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">	<img src="banderole.png" alt="partdieu" class="img-thumbnail"></div>
					
					<div id="titre-banderole"   style="center">
						<h1 style=";text-color:white;" >
							LA TOUR CRAYON</br>LA PART DIEU
						</h1>
					</div>
				</div>
				</div>
				
			
<div id="titre" style="background:yellow;">
					
				</div>

				<!--possible mise en page-->

			</div>
		</div>
		
		<div id="video">
			<div id="container_video" >
				<iframe width="1280" height="720" src="https://www.youtube.com/embed/95NjjrXzhak" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
			
		<footer>

	
		
			<div class="row">
				<div id="footer" class="col-lg-12">
					<div>
						<!--mff:67215367-->
						 
							<div class="baseline"></div>
							<div class="reseau-social o_r_url_retrouveznous">
								<div class="col-lg-6"><strong>Retrouvez-nous sur:</strong></div>
								<div class="col-lg-6"></div>
								<br/>
								<ul class="liste-reseaux">
									<li class="col-xs-6 col-md-3"><a href="http://r.orange.fr/r/Edivertissement_orangefan" class="o_r_facebook" target="_self"><span class="icon-facebook" class="link"></span>facebook</a></li>
									<li class="col-xs-6 col-md-3"><a href="http://r.orange.fr/r/Edivertissement_reseauxsociaux_twitter" class="o_r_twitter" target="_self"><span class="icon-twitter"></span>twitter</a></li>
									<li class="col-xs-6 col-md-3"><a href="http://r.orange.fr/r/Edivertissement_reseauxsociaux_pinterest" class="o_r_pinterest" target="_self"><span class="icon-pinterest" class="link"></span>pinterest</a></li>
									<li class="col-xs-6 col-md-3"><a href="http://r.orange.fr/r/Edivertissement_reseauxsociaux_googleplus" class="o_r_googleplus" target="_self"><span class="icon-google" class="link"></span>google +</a></li>
									<li><a href="test2.php">Liste des participants.</a></li>
								</ul>
	
							</div>
				 
				
					 
					</div>
					
					<!--pied de page-->
				</div>
			
				
			
		</footer>
		
				<div>
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<!-- Latest compiled and minified JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>

	<!--[if lt IE 9]>
        <link rel="stylesheet" href="../../dist/css/bootstrap-orangeIE8.css" />
        <link rel="stylesheet" href="../../dist/css/bootstrap-orange-themeIE8.css" />
        <link rel="stylesheet" href="../../dist/css/boostedIE8.css">
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	<!--[if (gte IE 9) | (!IE)]><!-->
	<link rel="stylesheet" href="bootstrap-orange.css" />
	<link rel="stylesheet" href="bootstrap-orange-theme.css" />
	<link rel="stylesheet" href="boosted.css">
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!--<![endif]-->
	<link href="styles.css" rel="stylesheet">
</head>




	<main id="content" role="main" class="container">
		

		<div class="row">
			<form class="container-fluid form-horizontal" role="form" id="myForm">
				<div class="row form-group">
					<label for="inputEmail" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail" placeholder="email@provider.com">
					</div>
				</div>
				<div class="row form-group">
					<label for="inputPrenom" class="col-sm-2 control-label">Prénom</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputPrenom" placeholder="prenom">
					</div>
				</div>
				<div class="row form-group">
					<label for="inputNom" class="col-sm-2 control-label">Nom</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputNom" placeholder="Nom">
					</div>
				</div>

				<div class="row form-group">
					<label for="inputComment" class="col-sm-2 control-label">Entreprise</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="inputEntreprise" placeholder="entreprise">
					</div>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="droit_img"> Droit l'image
					</label>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">S'inscrire</button>
					</div>
				</div>
			</form>
		</div>
	</main>


	<!-- Placed at the end of the document so the pages load faster -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- jQuery validate -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
	<!-- Include all compiled plugins bootstrap, bootstrap accessibility plugin and boosted specific components (below), or include individual files as needed -->
	<script src="../../dist/js/boosted.js"></script>

	<script type="text/javascript">
		// Surcharge des valeurs du script de la toolbar
		accessibilitytoolbar_custom = {
			idLinkModeContainer: "id_for_cdu_link",
			cssLinkModeClassName: "nav-item-cdu",
			idSkipLinkIdLinkMode: "cdu_skiplink",
			cssSkipLinkClassName: "skiplinks_trigger",
			callback: skiplinksAfterLoad
		};


		$(".skiplinks_trigger").focus(function() {
			$(".skiplinks_section").addClass("skiplinks_show").removeClass("axs_hide")
		});
		$(".skiplinks_trigger").blur(function() {
			$(".skiplinks_section").removeClass("skiplinks_show").addClass("axs_hide")
		});

		function skiplinksAfterLoad() {
			$(".skiplinks_trigger").focus(function() {
				$(".skiplinks_section").addClass("skiplinks_show").removeClass("axs_hide")
			});
			$(".skiplinks_trigger").blur(function() {
				$(".skiplinks_section").removeClass("skiplinks_show").addClass("axs_hide")
			});
		}
	</script>
	<!--<script type="text/javascript" src="http://comfort.orange.com/serveur/crossdom/js/toolbar-min.js"></script>-->


</html>

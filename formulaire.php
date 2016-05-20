




	<main id="content" role="main" class="container">
		

		<div class="row">
			<form class="container-fluid form-horizontal" role="form" id="myForm"  action="reussi.php" method="POST" >
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


<div id="successInscription" class="alert alert-success alert-dismissible" role="alert" style="display: none">
	<button type="button" id="closeAlert" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>Félicitations!</strong> votre inscription a bien été prise en compte.
</div>

<div class="row">
	<form class="container-fluid form-horizontal" role="form" id="formInscription" action="reussi.php" method="POST">
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



<script type="text/javascript">
	// http://chez-syl.fr/2012/01/envoyer-un-formulaire-en-ajax-avec-jquery-et-json/

	$(document).ready(function() {

		// Lorsque je soumets le formulaire
		$('#formInscription').on('submit', function(e) {

			e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire

			var $this = $(this); // L'objet jQuery du formulaire
			// Je récupère les valeurs
			var mail = $('#inputEmail').val();
			var prenom = $('#inputPrenom').val();
			var nom = $('#inputNom').val();
			var entreprise = $('#inputEntreprise').val();

			// Je vérifie une première fois pour ne pas lancer la requête HTTP
			// si je sais que mon PHP renverra une erreur
			if (nom === '' || prenom === '' || entreprise === '' || mail === '') {
				alert('Les champs doivent êtres remplis');
			}
			else {
				// Envoi de la requête HTTP en mode asynchrone
				$.ajax({
					url: $this.attr('action'), // Le nom du fichier indiqué dans le formulaire
					type: $this.attr('method'), // La méthode indiquée dans le formulaire (get ou post)
					data: $this.serialize(), // Je sérialise les données (j'envoie toutes les valeurs présentes dans le formulaire)
					success: function(html) { // Je récupère la réponse du fichier PHP
						$('#successInscription').show(); // J'affiche cette réponse
					}
				});
			}
		});

		// fermeture du message
		$('#closeAlert').on('click', function(e) {
			e.preventDefault(); // J'empêche le comportement par défaut du navigateur
			$('#successInscription').hide();
		});


	});

	/*
	function validateForm() {
	    var x = document.forms["inputEmail"]["inputNom"]["inputPrenom"]["inputEntreprise"].value;
	    if (x == null || x == "") {
	        alert("Name must be filled out");
	        return false;
	    }
	}
	*/
</script>






	<main id="content" role="main" class="container">
		

		<div class="row">
			<form class="container-fluid form-horizontal" role="form" id="myForm" onsubmit="return validateForm()"  method="POST" id="formu" >
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
						<button type="submit" class="btn btn-default" >S'inscrire</button>
					</div>
				</div>
			</form>
		</div>
	</main>



<script type="text/javascript">

function validateForm() {
    var x = document.forms["inputEmail"]["inputNom"]["inputPrenom"]["inputEntreprise"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
}
//--> 
	
</script>



<div class="row">
	
	<form class="container-fluid form-horizontal" role="form" id="formcom" action="reussi.php" method="POST">

		<div class="row form-group">
			<label for="inputEmail" class="col-sm-2 control-label">EMAIL</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="email@provider.com">
			</div>
		</div>
		<div class="row form-group">
			<label for="inputPrenom" class="col-sm-2 control-label">NOM</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputNom" name="inputNom" placeholder="NOM">
			</div>
		</div>
		<div class="row form-group">
			<label for="inputNom" class="col-sm-2 control-label">PRENOM</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPrenom" name="inputPrenom" placeholder="Prenom">
			</div>
		</div>

		<div class="row form-group">
			<label for="inputComment" class="col-sm-2 control-label">ENTREPRISE</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEntreprise" name="inputEntreprise" placeholder="entreprise">
			</div>
		</div>
		<div class="checkbox">
			<label>
				<input type="checkbox" name="droit_img"> Droit à l'image: en cochant cette case, vous acceptez d'être pris en photo pendant l'évènement et que votre photo puisse être affichée sur le site après le 21 juin et jusqu'au 30 juin au plus tard.
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
 $(function(){
	$("#formcom").submit(function(e){
		 e.preventDefault();  // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
		 
		/*
		droit_img = $(this).find("input[name=droit_img]").val();
		inputEmail = $(this).find("input[name=inputEmail]").val();
		inputPrenom = $(this).find("input[name=inputPrenom]").val();
		inputNom = $(this).find("input[name=inputNom]").val();
		inputEntreprise = $(this).find("input[name=inputEntreprise]").val();
		*/
		
		$.post('reussi.php', $("#formcom").serialize()).done(function(response) {
			alert('response='+response);
		});
		/*
		$.post("reussi.php", {droit_img: droit_img, inputNom: inputNom, inputPrenom: inputPrenom inputEntreprise: inputEntreprise inputEmail: inputEmail, com:message}, function(data){
			alert(data);
		});
		*/
		
	});
});

/*$(document).ready(function() {
    $('#monForm').on('submit', function(e) {
        e.preventDefault(); // J'empêche le comportement par défaut du navigateur, c-à-d de soumettre le formulaire
 
        var $this = $(this);
 
        var droit = $('#droit_img').val();
        var pseudo = $('#inputEmail').val();
        var mail = $('#inputPrenom').val();
        var nom = $('#inputNom').val();
        var entreprise = $('#inputEntreprise').val();
        
        if(pseudo === '' || mail === '') {
            alert('Les champs doivent êtres remplis');
        } else {
            $.ajax({
                url: $this.attr('action'),
                type: $this.attr('method'),
                data: $this.serialize(),
                dataType: 'json', // JSON
                success: function(json) {
                    if(json.reponse === 'ok') {
                        alert('Tout est bon');
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
    });
}); */


</script>

 
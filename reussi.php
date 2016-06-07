

<?php

// connexion : heroku pg:psql --app orange-e2c-flashevent-dev DATABASE

// Connexion, sélection de la base de données
// DEV
$dbconn = pg_connect("host=ec2-54-228-189-127.eu-west-1.compute.amazonaws.com dbname=d3psr2c3ccmceu user=mqpimsyvvtqzfq password=YXI4KmW87z9S07QbWoc0HOM2zx port=5432")
or die('Connexion impossible : ' . pg_last_error());
?>

<?php    
		extract($_POST);
    	{
		    /*
	    	// on prépare la requête pour récupérer le numero du propriétaire 
        	$query = 'SELECT Nom FROM liste_inscri WHERE nom = "'.$_POST['inputNom3'].'"';
        
        	// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
        	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
        
        	// on récupère le résultat sous forme d'un tableau
        	$data = mysql_fetch_array($req);
        
        	// on libère l'espace mémoire alloué pour cette interrogation de la base
        	mysql_free_result ($req); */
        	
        	// $query = 'INSERT INTO liste_inscri (droit_image,nom,prenom,email,entreprise) VALUES("'.$_POST['inputNom3'].'", "'.$_POST['inputPrenom3'].'", "'.$_POST['inputEmail3'].'", "'.$_POST['inputEntreprised3'].'")';
        	
	        if (strlen( $_POST['inputNom'] ) == 0)
	        {
	        	echo 'erreur nom obligatoire';
	        } else {
			    $query = buildQueryInsert($_POST['droit_img']); 
	    		pg_query ($query) or die ('Erreur SQL !'.$query.'<br />'.mysql_error());
		        echo 'Merci de votre inscription à l\'événement , Rendez vous le 21/06/2016 à la tour de la part dieu.';
	        }
    	
    		pg_close($dbconn);
    		
    		
		}
			
		function buildQueryInsert ($droit_img){
			
		    //var_dump($param);
		    if ($droit_img == 'on'){
		    	
		    $query = 'INSERT INTO personne (droit_image,nom,prenom,email,entreprise) VALUES(\''.$_POST['droit_img'].'\', \''.$_POST['inputNom'].'\', \''.$_POST['inputPrenom'].'\', \''.$_POST['inputEmail'].'\', \''.$_POST['inputEntreprise'].'\')';
		    }
		    else
		    {
		     $query = 'INSERT INTO personne (nom,prenom,email,entreprise) VALUES(\''.$_POST['inputNom'].'\', \''.$_POST['inputPrenom'].'\', \''.$_POST['inputEmail'].'\', \''.$_POST['inputEntreprise'].'\')';
		    }
		  return ($query);
		    
		    
		}
		   

	
    	
?>
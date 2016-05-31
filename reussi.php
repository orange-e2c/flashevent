
<?php
// on se connecte à notre base
$base = mysql_connect ('127.0.0.1', 'aurelien', 'e2c69120');
mysql_select_db ('participant', $base) ;
?>

<?php    
		extract($_POST);
    	{
		    /*
	    	// on prépare la requête pour récupérer le numero du propriétaire 
        	$sql = 'SELECT Nom FROM liste_inscri WHERE nom = "'.$_POST['inputNom3'].'"';
        
        	// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
        	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
        
        	// on récupère le résultat sous forme d'un tableau
        	$data = mysql_fetch_array($req);
        
        	// on libère l'espace mémoire alloué pour cette interrogation de la base
        	mysql_free_result ($req); */
        	
        	// $sql = 'INSERT INTO liste_inscri (droit_image,nom,prenom,email,entreprise) VALUES("'.$_POST['inputNom3'].'", "'.$_POST['inputPrenom3'].'", "'.$_POST['inputEmail3'].'", "'.$_POST['inputEntreprised3'].'")';
        	
		    $sql = test($_POST['droit_img']); 
    		mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
    	
    		
    		$numero_insere = mysql_insert_id();
    		
    		mysql_close();
    		
    		
	        echo 'Merci de votre inscription à l\'événement , Rendez vous le 21/06/2016 à la tour de la part dieu\.';
		}
			
		function test ($droit_img){
			
		    //var_dump($param);
		    if ($droit_img == 'on'){
		    	
		    $sql = 'INSERT INTO liste_inscri (droit_image,nom,prenom,email,entreprise) VALUES("'.$_POST['droit_img'].'", "'.$_POST['inputNom'].'", "'.$_POST['inputPrenom'].'", "'.$_POST['inputEmail'].'", "'.$_POST['inputEntreprise'].'")';
		    }
		    else
		    {
		     $sql = 'INSERT INTO liste_inscri (nom,prenom,email,entreprise) VALUES("'.$_POST['inputNom'].'", "'.$_POST['inputPrenom'].'", "'.$_POST['inputEmail'].'", "'.$_POST['inputEntreprise'].'")';
		    }
		  return ($sql);
		    
		    
		}
		   
        if (strlen( $_POST['inputNom'] ))
        {
        	echo 'exit';
        }
	
    	
?>
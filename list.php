<?php

// connexion : heroku pg:psql --app orange-e2c-flashevent-dev DATABASE

// Connexion, sélection de la base de données
// DEV
$dbconn = pg_connect("host=ec2-54-228-189-127.eu-west-1.compute.amazonaws.com dbname=d3psr2c3ccmceu user=mqpimsyvvtqzfq password=YXI4KmW87z9S07QbWoc0HOM2zx port=5432")
or die('Connexion impossible : ' . pg_last_error());
?>
<html>
   
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style4.css" />

    </head>
    <body>
        
        
        <center><h1>Liste des participants.</h1>
        
          <?php 
         if(true)
          //if (isset($_POST['password']) AND $_POST['password'] ==  "orangee2c")
          {

          ?>
             <table class="table table-bordered">
                <tr>
                    <th>Droit à l'image</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Entreprise</th>
                </tr>
     <?php
        // lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
     
        $query = 'SELECT * FROM personne';
        
        // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
        $result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());
        
        // on va scanner tous les tuples un par un
        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            //foreach ($line as $col_value) {
    ?>
          
                <tr>
                    <td><?php echo $line['droit_image'] ?></td>
                    <td><?php echo $line['nom'] ?></td>
                    <td><?php echo $line['prenom'] ?></td>
                    <td><?php echo $line['email'] ?></td>
                    <td><?php echo $line['entreprise'] ?></td>
                </tr>
                
        <?php
        
            //}    
            }
        
        pg_close($dbconn);
    ?>
        <?php
          }
          
          else 
          {
              echo '<p>password incorecte</p>';
          }
         ?>
         
         
         
        
        
    </body>
</html>
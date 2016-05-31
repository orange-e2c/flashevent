<?php
// on se connecte à notre base
$base = mysql_connect ('127.0.0.1', 'aurelien', 'e2c69120');
mysql_select_db ('participant', $base) ;
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
         
          if (isset($_POST['password']) AND $_POST['password'] ==  "orangee2c")
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
     
        $sql = 'SELECT * FROM liste_inscri';
        
        // on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
        $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
        
        // on va scanner tous les tuples un par un
        while ($data = mysql_fetch_array($req)) {
    ?>
          
                <tr>
                    <td><?php echo $data['droit_image'] ?></td>
                    <td><?php echo $data['nom'] ?></td>
                    <td><?php echo $data['prenom'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['entreprise'] ?></td>
                </tr>
                
        <?php
        }
        mysql_close ();
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
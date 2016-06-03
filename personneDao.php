<?php

// connexion : heroku pg:psql --app orange-e2c-flashevent-dev DATABASE

// Connexion, sélection de la base de données
// DEV
$dbconn = pg_connect("host=ec2-54-228-189-127.eu-west-1.compute.amazonaws.com dbname=d3psr2c3ccmceu user=mqpimsyvvtqzfq password=YXI4KmW87z9S07QbWoc0HOM2zx port=5432")
or die('Connexion impossible : ' . pg_last_error());

// Exécution de la requête SQL
$query = 'SELECT * FROM personne';
$result = pg_query($query) or die('Échec de la requête : ' . pg_last_error());

// Affichage des résultats en HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
echo "\t<tr>\n";
foreach ($line as $col_value) {
echo "\t\t<td>$col_value</td>\n";
}
echo "\t</tr>\n";
}
echo "</table>\n";

// Libère le résultat
pg_free_result($result);

// Ferme la connexion
pg_close($dbconn);
?>
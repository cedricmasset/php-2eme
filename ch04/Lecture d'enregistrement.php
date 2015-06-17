<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Lecture d'enregistrements dans une table</title>
  </head>
  <body>
<?php

$dbh = new mysqli('localhost', 'cpnv', 'cpnv1234', 'ch04');


if ($dbh->connect_errno) {

    die('Problème de connexion : (' . $dbh->connect_errno . ') '
                                    . $dbh->connect_error);
}


if ($result = $dbh->query('Recherche SQL')) {


    while ($Numrows = $result->fetch_assoc()) {
        echo "Les adresses e-mail<br>\n";

    }

    $result->close();

} else {
    die('Problème lors la requête : (' . $dbh->errno . ') '
                                       . $dbh->error);
}

$dbh->close();

?>

  </body>
</html>

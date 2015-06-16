<?php

$pv    = $_POST['pv'];
$fondpropre = $_POST['fondpropre'];
$min = $pv/$fondpropre;
$mont_de_l_emprunt = $$pv-$fonpropre;


?>
<!DOCTYPE html>

<html lang="fr">
  <head>
    <title>Résultat du calcul</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Résultat du calcul</h1>

<?php

if ($min<=5) {
    
    echo "Vous disposez d'assez de fond propre";
    echo "Il te manque encore $mont_de_l_emprunt que tu emprentera à la banque";
    
} else {
    
    echo "Vous ne disposer pas d'assez de fond propre";
}

?>


  </body>
</html>

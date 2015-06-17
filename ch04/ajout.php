<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Enregisterment d'adresse e-mail</title>
</head>

<body>

<?php

	if isset($_POST['envoyer']) {
		
		$email = $_POST['email'];
		
        $email_correct = filter_var($email, FILTER_SANITIZE_EMAIL);
        
        if (filter_var($email_correct, FILTER_VALIDATE_EMAIL)) {
                
            echo "Bravo votre adresse est valide<br>";
        } else {
            echo "domage votre adresse n'est pas valide<br>";
        }
        
        
    
		
		$dbh = new mysqli( "localhost" , "cpnv", "cpnv1234", "ch04" );
		
		if ( $dbh->connect_errno ) {
			echo "Erreur de connexion" .$dbh->connect->error;
		}
		
		
		$sql = "INSERT INTO liste_email VALUES (NULL, '" . $email_correct . "', NOW() )";
        if ( $result = $dbh->query( $sql ) ) {
            echo $result->affected rows . "  lignes ajouté.";
        } else {
            echo "L'erreur: ", $dbh->error, " est survenue<br>";
        }
		
    } else { 
?>



<form id="insert" name="insert" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

<p> Entrez votre adresse: <input type="email" id="email" name="email" required="required"></p>
<input type="submit" id="envoyer" name="envoyer" value="Envoyer">
</form>




<?php
}
mixed mysqli::query ( string $query [, int $resultmode = MYSQLI_STORE_RESULT ] )
?>

</body> 
</html>

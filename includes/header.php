<?php
 

try {
    $bdd =new PDO('mysql:host=localhost;dbname=E-commerce','root',''); 
    
		} catch (Exception $e) {

    		die('Erreur : '.$e->getMessage());
}


?>

<!DOCTYPE html>
<html>
	<head>
	
		<link rel="stylesheet" type="text/css" href="../E_commerce/css/header.css">
	
	</head>

	<body>
 
 <h1> <img src="../E_commerce/image/header.png" style="width: 100%;  height: 50%;"></h1>  

		<header>
				 
			<ul class="menu">
				
				<li><a href="index.php">Accueil</a></li>
				<li><a href="boutique.php">Boutiques</a></li>
				<li><a href="Panier.php">Panier</a></li>
				<li><a href="inscription.php">Inscription</a></li>
				<li><a href="connexion.php">Connexion</a></li>
				 
			
			</ul>
				
				  

		</header>
 

</body>
</html>
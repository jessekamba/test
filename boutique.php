<?php

require_once("includes/header.php");
require_once("includes/slidebar.php");
$select=$bdd->prepare("SELECT * FROM produits");
$select->execute();
	while ($stock=$select->fetch(PDO :: FETCH_OBJ)) {

		?>

		<h2><?php echo $stock->titre;?></h2>
		<h5><?php echo $stock->description;?></h5>
		<h4><?php echo $stock->prix;?>$</h4>


		<?php

		}
		?>
	</br></br></br></br></br>
		<?php
require_once("includes/footer.php");

?>
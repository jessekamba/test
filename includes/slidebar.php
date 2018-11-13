 <link rel="stylesheet" type="text/css" href="../E_commerce/css/header.css">
 <div class="slidebar">
 	
<h4> Articles recents</h4>
<?php

$select=$bdd->prepare("SELECT * FROM produits ORDER BY id DESC LIMIT 0,3");
$select->execute();
	while ($stock=$select->fetch(PDO :: FETCH_OBJ)) {

		?>

		<h2><?php echo $stock->titre;?></h2>
		<h5><?php echo $stock->description;?></h5>
		<h4><?php echo $stock->prix;?>$</h4>


		<?php

		}



?>
 </div>
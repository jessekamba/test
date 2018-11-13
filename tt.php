<?php if(isset($_POST['valider'])){

		$titre=$_POST['titre'];
		$description=$_POST['description'];
		$prix=$_POST['prix']; 

		$img = ($_FILES["img"]["name"]);

		$img_tmp= ($_FILES["img"]["tmp_name"]);

		if(!empty($img_tmp)){  


		}else{
			echo "veuillez choisir une image";
		}

		if ($titre && $description && $prix){
			

	$insertion=$bdd->prepare("INSERT INTO produits VALUES('','$titre','$description','$prix') ");
	$insertion->execute();

}else{echo "veuillez remplir tous les champs";


		}
	}

?> 

<form action="admin.php" method="post" enctype="multimedia/form-data">
	
<h3>Nom du produit : </h3> <input type="text" name="titre"/>
<h3>description du produit : </h3> <textarea name="description"/></textarea>
<h3>prix </h3> <input type="text" name="prix"/></br></br>
<input type="file" name="img"/>
<input type="submit" name="valider">


</form>

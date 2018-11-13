<?php 

session_start();

?>

<h1> bienvenu <?php echo $_SESSION['username'];?></h1>
</br>

<a href="?action=add">Ajouter un produit</a><br/><br/>
<a href="?action=modifyAndDelete">Modifier /supprimer un produit</a></br><br/>
 
<?php

try {
    $bdd =new PDO('mysql:host=localhost;dbname=E-commerce','root',''); 
    
		} catch (Exception $e) {

    		die('Erreur : '.$e->getMessage());
}

if(isset($_SESSION['username'])){
if(isset($_GET['action'])){




if($_GET['action']=='add'){


	if(isset($_POST['valider'])){

		$titre=$_POST['titre'];
		$description=$_POST['description'];
		$prix=$_POST['prix']; 

		if(!empty($_FILES['img']['name'])){ 
			 $non_normal=$_FILES['img']['name'];
			 $type_normal=strrchr($non_normal,".");
			 $tempo=$_FILES['img']['tmp_name'];
			 $extension_aut = array('.jpg','.png','.JPG','.PNG');
			 	if(in_array($type_normal,$extension_aut)){

			 		if(move_uploaded_file($tempo,'images/'.$non_normal)){

			 		}



			 	}


		}
else{	
	if ($titre && $description && $prix){$insertion=$bdd->prepare("INSERT INTO produits VALUES('','$titre','$description','$prix') ");
							$insertion->execute();}
          else{echo "veuillez remplir tous les champs";}
	}

}
?> 

<form action="admin.php?action=add" method="POST" enctype="multipart/form-data">
	
<h3>Nom du produit : </h3> <input type="text" name="titre"/>
<h3>description du produit : </h3> <textarea name="description"/></textarea>
<h3>prix </h3> <input type="text" name="prix"/></br></br>
<input type="file" name="img">
<input type="submit" name="valider">


</form>

<?php

}else if ($_GET['action']=='modifyAndDelete'){

	$select=$bdd->prepare("SELECT * FROM produits");
	$select->execute();
		while ($stock=$select->fetch(PDO :: FETCH_OBJ)) {

		echo $stock->titre;

			?> 

			<a href="?action=modify&amp;id=<?php echo $stock->id; ?>">Modifier,</a>
			<a href="?action=delete&amp;id=<?php echo $stock->id; ?>">x</a><br/><br/>
			
			<?php
				}
}else if ($_GET['action']=='modify'){

	$id=$_GET['id']; 
	$select=$bdd->prepare("SELECT * FROM produits WHERE id=$id");
	$select->execute();

	$recupere=$select->FETCH(PDO:: FETCH_OBJ);

	?>

		<form action="" method="post">
	
			<h3>Nom du produit : </h3> <input value="<?php echo($recupere->titre);  ?>" type="text" name="titre"/>
			<h3>description du produit : </h3> <textarea name="description"><?php echo($recupere->description);  ?></textarea>
			<h3>prix </h3> <input value="<?php echo($recupere->prix);  ?>" type="text" name="prix"/>
			<input type="submit" name="modifier" value="Modifier">
		
		</form>

	<?php 

if (isset($_POST['modifier'])){

	$titre=$_POST['titre'];
	$description=$_POST['description'];
	$prix=$_POST['prix'];  

    $update=$bdd->prepare("UPDATE produits SET titre='$titre',description='$description',prix='$prix' WHERE id=$id");
    $update->execute();
	}

}else if ($_GET['action']=='delete'){
	$id=$_GET['id'];
	$delete=$bdd->prepare("DELETE FROM produits  WHERE id=$id");
	$delete->execute();

}else{
	die('une erreur s\'est produite');
}
}else{

}

}
else{
	header("location:../index.php");
	}

?>




<?php
session_start();
$user="jessekamba";
$password_definit="72688000@";

if(isset($_POST["connecter"])){
 
$username=$_POST['Pseudo'];
$password=$_POST['password'];

if($username && $password){
     if ($username==$user && $password==$password_definit){
        
        $_SESSION['username']=$username;
        header("location:admin.php");
     }
     else{echo "veuillez verifier que les donnees entrees sont correctes";

     }
}
    else{echo "tous les champs doivent etre remplis";
    
    }
}
?>



 <link rel="stylesheet" type="text/css" href="../css/E_commerce.csss">
 <meta charset="utf-8">
<h1>Admin Auth </h1>
<form method="POST" action="index.php">
	
 						<table>

 						<tr>

 						<td> <label for="Pseudo">Pseudo</label> </td> 
                        <td> <input type="text" id="Pseudo" name="Pseudo" placeholder="entrez votre Pseudo"value="" > </td>
                        
                        </tr>

                        <tr>
                            

                        <td> <label for="password">Mot de passe</label> </td>
                        <td> <input type="password" id="password" name="password" placeholder="entrez votre mot de passe"value=""  > </td>


                        </tr> 

                        <tr> 
                            

                        <td>  <button type="reset" name="Annuler" >Annuler</button></td>
                        <td> <button type="submit" name="connecter">Valider</button></td>
                    	</tr>
                         </
                        </table>
                    </form>  
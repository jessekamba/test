 <!DOCTYPE html>
 <html>
 <head>
 		<title>user registrer</title>

 			 <link rel="stylesheet" type="text/css" href="../css/E_commerce.css">

 </head>
 <body>
 
<h1> User registrer </h1>

<form>
	
 						<table>

 						<tr>

 						<td> <label for="firstname">Prenom</label> </td> 
                        <td> <input type="text" id="firstname" name="prenom" placeholder="entrez votre Prenom"value=""required> </td>
                        
                        </tr>

                        <tr>

                        <td> <label for="lastname">Nom</label> </td>
                        <td> <input type="text" id="lastname" name="prenom" placeholder="entrez votre Nom"value="" required> </td>

                        </tr> 

                        <tr>

                        <td> <label for="Pseudo">Pseudo</label> </td>
                       <td> <input type="text" id="Pseudo" name="Pseudo" placeholder="choisissez votre Pseudo..." value="" required> </td>

                    	</tr>

                    	<tr>

						<td> <label for="number">Numero</label> </td>
                        <td> <input type="tel" id="number" name="numero" placeholder="+243" value=""required></td> 
						</tr>

                    	<tr>

                       <td> <label for="email">Email</label> </td> 
                       <td> <input type="email" id="mail" name="mail" placeholder="entrez votre adresse Mail"value="" required></td>
                    	
                       </tr> 

                        <tr>

                        <td> <label for="email2">Email de confirmation</label> </td>
                        <td> <input type="email" id="email2" name="mail2" placeholder="Mail de comfirmation ..."value=" " required> </td>
                    	
                    	</tr> 
						
						<tr>

                        <td> <label for="password">Mot de passe</label> </td> 
                        <td><input type="password" id="password" name="password" placeholder="entrez votre mot de passe..." required> </td>
                         </tr>

                        <tr>

                        <td> <label for="password2">Mot de passe de confirmation</label> </td>
                        <td> <input type="password" id="password2" name="password2" placeholder="mot de passe de confirmation..." required> </td>

                    	</tr>

                    	<tr> 

                        <td>  <button type="reset" name="Annuler" >Annuler</button></td>
                        <td> <button type="submit" name="inscription">S'inscrire</button></td>
                    	</tr>

                        </table>
                    </form>  







</form>



 </body>
 </html>
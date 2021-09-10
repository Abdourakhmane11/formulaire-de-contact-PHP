<form method="post" action="affichage.php">

Nom: <input type="text" name="name" value="<?php echo $name;?>"> <br><br>

Prenom: <input type="text" name="name" value="<?php echo $name;?>"><br><br>

E-mail: <input type="text" name="email" value="<?php echo $email;?>"><br><br>

Tel: <input type="text" name="Tel" value="<?php echo $Tel;?>"><br><br>

Adresse: <input type="text" name="adress" value="<?php echo $adress;?>"><br><br>

 <input type="submit" name="envoyer" placeholder="envoyer" value="envoyer" style="width:75px;" > 



</form>

<?php
      if (isset($_POST['submit'])) {
      	$nom = $_POST['nom'];
      	$prenom = $_POST['prenom'];
      	$email = $_POST['email'];
      	$tel =$_POST['tel'];
      	$adresse =$_POST['adresse'];
      	 echo "<h2> Formulaire</h2>";
      	 echo "Nom : ".$nom.'Prenom : '.$prenom."E-mail".$email."tel".$tel."adresse".$adresse;
      }

	?>
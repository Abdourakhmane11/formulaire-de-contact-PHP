<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php
      if (isset($_POST['Envoyer'])) {
      	$nom = $_POST['nom'];
      	$prenom = $_POST['prenom'];
      	$email = $_POST['email'];
      	$tel =$_POST['tel'];
      	$adresse =$_POST['adress'];
      	 
      	 echo "Je m'appelle : ".$nom.' '.$prenom.'.<br>'."Mon E-mail est : ".$email.'.<br>'."Veillez me contacter au :".$tel.'.<br>'."J'habite à  ".$adresse;
      }

	?>
</body>
</html>
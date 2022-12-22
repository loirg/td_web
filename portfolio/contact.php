<?php

$menu=yaml_parse_file('menu.yaml');

//echo '<pre>'.print_r($yamlContent,true).'</pre>';
?>


<!DOCTYPE HTML>
	<html lang="fr">
		<head>
			<title>Guillaume Loir</title>
			<meta charset="UTF-8">
			<link rel="stylesheet" href="style/styles.css">
			<link rel="icon" href="icone/portfoliot.png">
		</head>
		<body>
            
		<?php include("menu.php");
		?>

<h1 class="Nom">Contact</h1>
<form action="send-email.php" method="POST">
<div class="formulaire">
    <p>
        Votre Nom et Prénom : *<br />
        <input type="text" name="name" class="form-control" placeholder="Nom Prénom"><br />
    </p>
    <p>
        Votre civilité : <br />
        <input type="radio" name="civi" value="Mme"/> Madame <br />
        <input type="radio" name="civi" value="Mr" /> Monsieur<br />
        <input type="radio" name="civi" value="AirBus a380" /> AirBus a380
    </p>
    <p>
   Votre statut professionnel : <br />
   <select name="profil" class="form-status">
      <option value="professeur">Un professeur</option>
      <option value="Etudiant" selected="selected">Un étudiant</option>
      <option value="professionnel">Un professionnel</option>
      <option value="chômeur">Un chômeur</option>
   </select>
    </p>
    <p>
    
        Votre adresse Mail : *<br />
        <input type="text" name="mail" class="form-control" placeholder="Email Address">
    </p>
    <p>
    
        Objet du message : <br />
        <input type="text" name="subject" class="form-control" placeholder="Subject">
    </p>
    <p>
        Message : <br />
        <textarea class="form-control" name="text" rows="5" placeholder="Your Message"></textarea>
    </br><button class="btn-btn-default" type="submit">Envoyer</button>
        <button class="btn-btn-default" type="reset">Annuler</button></br>
    </p>
    </div>
</form>
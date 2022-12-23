<?php
$data=yaml_parse_file('validation.yaml');
$menu=yaml_parse_file('menu.yaml');
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
            

<h1 class="Nom">Votre message à bien été envoyer :)</h1>

<?php

echo '<h1 class="post-contact">'.$data['valider'].'</h1>';
echo '<div class="btn-btn-default2">';
echo '<a href="index.php">'.$menu['menu']['index'].'</a>';
echo '</div>';
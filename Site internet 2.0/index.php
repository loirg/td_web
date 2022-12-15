<?php

$menu=yaml_parse_file('menu.yaml');
$index=yaml_parse_file('index.yaml')

?>
<!DOCTYPE HTML>
	<html lang="fr">
		<head>
			<title>Guillaume Loir</title>
			<meta charset="utf8">
			<link rel="stylesheet" href="style/styles.css">
			<link rel="icon" href="icone/portfoliot.png">
		</head>
		<body>
			<?php include("menu.php"); ?>

			<div class="lineaire-simple"></div>
			
			<?php 
				echo '<h1 class="MOI">'.$index['user']['prenom'].' '.$index['user']['nom'].'</h1>';
				echo '<h1 class=nom_propos>'.$index['accroche']['phrase'].'</h1>';
			?>
			
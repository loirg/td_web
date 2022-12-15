<?php

$menu=yaml_parse_file('menu.yaml');

//echo '<pre>'.print_r($yamlContent,true).'</pre>';
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
            
		<?php include("menu.php");
		?>
		
		<?php
		$data=yaml_parse_file('competences.yaml');
		
		//print_r($competences);
		foreach($data AS $domaine=>$tbCompetences){
			echo '<h3>'.$domaine.'</h3>';
			foreach($tbCompetences AS $competence=>$niveau){
				echo '<p class="nom_skill">'.$competence.'</p>';
				echo '<div class="container">';
				echo '<div class="skill" style="width:'.$niveau.'%">'.$niveau.'%</div>';
				echo '</div>';
			}
		}
		?>

		

		<!--
			<h1 class="Nom">Mes compétences</h1>
			<h3>Programmation</h3>
		
			<p class="nom_skill">HTML</p>
			<div class="container">
				<div class="skill html">60%</div>
			</div>
			
			<p class="nom_skill">CSS</p>
			<div class="container">
				<div class="skill css">50%</div>
			</div>

			<p class="nom_skill">PHP</p>
			<div class="container">
				<div class="skill php">0.1%</div>
			</div>
			
			<h3>Bureautique</h3>

			<p class="nom_skill">Word</p>
			<div class="container">
				<div class="skill word">80%</div>
			</div>

			<p class="nom_skill">Excel</p>
			<div class="container">
				<div class="skill excel">90%</div>
			</div>

			<p class="nom_skill">Power Point</p>
			<div class="container">
				<div class="skill Power_point">85%</div>
			</div>

			<h3>Langues apprises</h3>

			<p class="nom_skill">Français</p>
			<div class="container">
				<div class="skill Français">100%</div>
			</div>

			<p class="nom_skill">Anglais</p>
			<div class="container">
				<div class="skill anglais">55%</div>
			</div>

			<p class="nom_skill">Espagnol</p>
			<div class="container">
				<div class="skill Espagnol">15%</div>
			</div>
-->

</body>
</html>
			
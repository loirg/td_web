<?php

$menu=yaml_parse_file('menu.yaml');
$footer=yaml_parse_file('footer.yaml');
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
		<h1 class="Nom">Formation</h1>
		<?php
		$data=yaml_parse_file('formation.yaml');
		foreach($data['CV'] AS $exp=>$cv){
			echo '<h2 class="nom_propos">Voici un lien vers mon CV</h2>';
			echo '<div class="box">';
			echo '<a class="cv" target="_blank" href="'.$cv['url'].'"><img src="'.$cv['icone'].'" /></a>';
			echo '</div>';
		}
        /*foreach($data AS $domaine=>$tbFormation){
			echo '<div class="tabformation">';
			echo '<h3>'.$domaine.'</h3>';
			echo '</div>';
			foreach($tbFormation AS $Formation=>$contenu){
				echo '<div class="formation">';
				echo '<p>'.$contenu.'</p>';
				echo '</div>';	
			}
        }
*/	?>
		<div class="barre"></div>
		<p class=Nom_formation>Collège</p>
		
		<ul class="formation">
			<?php

				foreach($data['Collège'] AS $domaine=>$tbFormation){
					foreach($tbFormation AS $Formation=>$contenu){
						echo '<p>'.$contenu.'</p>';
					}
        		}
			?>
		
			</ul>

		<div class="barre"></div>
		<p class=Nom_formation>Lycée</p>
		<ul class="formation">
			<?php

				foreach($data ['Lycée'] AS $domaine=>$tbFormation){
					foreach($tbFormation AS $Formation=>$contenu){
						echo '<p>'.$contenu.'</p>';
					}
        		}
			?>
		</ul>
		<div class="barre"></div>
		<p class=Nom_formation>Etudes Supérieures</p>
		<ul class="formation">
			<?php

				foreach($data ['Etudes Supérieures'] AS $domaine=>$tbFormation){
					foreach($tbFormation AS $Formation=>$contenu){
						echo '<p>'.$contenu.'</p>';
					}
        		}
			?>
		</ul>
		<div class="barre"></div>
	</body>
	<footer>
		<?php
		include("footer.php");
		?>
	</footer>
</html>
			
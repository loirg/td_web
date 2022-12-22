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
        <h1 class="Nom">Experience</h1>
<?php
$data=yaml_parse_file('experience.yaml');
?>

		<div class="barre"></div>
		<p class=Nom_formation>1ère PFMP</p>
		
		<ul class="formation">
			<?php

				foreach($data['1ère PFMP'] AS $domaine=>$tbFormation){
					foreach($tbFormation AS $Formation=>$contenu){
						echo '<p>'.$contenu.'</p>';
					}
        		}
			?>
		
			</ul>

		<div class="barre"></div>
		<p class=Nom_formation>2ème PFMP</p>
		<ul class="formation">
			<?php

				foreach($data ['2ème PFMP'] AS $domaine=>$tbFormation){
					foreach($tbFormation AS $Formation=>$contenu){
						echo '<p>'.$contenu.'</p>';
					}
        		}
			?>
		</ul>
		<div class="barre"></div>
		<p class=Nom_formation>3ème PFMP</p>
		<ul class="formation">
			<?php

				foreach($data ['3ème PFMP'] AS $domaine=>$tbFormation){
					foreach($tbFormation AS $Formation=>$contenu){
						echo '<p>'.$contenu.'</p>';
					}
        		}
			?>
		</ul>

		<div class="barre"></div>
		<p class=Nom_formation>4ème PFMP</p>
		
		<ul class="formation">
			<?php

				foreach($data['4ème PFMP'] AS $domaine=>$tbFormation){
					foreach($tbFormation AS $Formation=>$contenu){
						echo '<p>'.$contenu.'</p>';
					}
        		}
			?>
		
			</ul>

			<div class="barre"></div>
		<p class=Nom_formation>5ème PFMP</p>
		
		<ul class="formation">
			<?php

				foreach($data['5ème PFMP'] AS $domaine=>$tbFormation){
					foreach($tbFormation AS $Formation=>$contenu){
						echo '<p>'.$contenu.'</p>';
					}
        		}
			?>
		
			</ul>

			<div class="barre"></div>
		<p class=Nom_formation>Travail d'été</p>
		
		<ul class="formation">
			<?php

				foreach($data['Travail d-été'] AS $domaine=>$tbFormation){
					foreach($tbFormation AS $Formation=>$contenu){
						echo '<p>'.$contenu.'</p>';
					}
        		}
			?>
		
			</ul>

			
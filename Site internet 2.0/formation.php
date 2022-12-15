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
		$data=yaml_parse_file('formation.yaml');


        foreach($data AS $domaine=>$tbFormation){
			echo '<h3>'.$domaine.'</h3>';
			foreach($tbFormation AS $Formation=>$contenu){
				echo '<p>'.$Formation.' '.$contenu.'</p>';
				/*echo '<div class="container">';*/
				/*echo '</div>';*/
			}
        }
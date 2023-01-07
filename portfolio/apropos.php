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
		
		<?php
		$data=yaml_parse_file('apropos.yaml');
        /*print_r($data);*/
        echo '<p class="Nom">'.$data['propos'].'</p>';
        echo '<p class="nom_propos">'.$data['nom'].'</p>';
		echo '<div class="barre"></div>';
        echo '<h2 class="text_propos">'.$data['accroche'].'</h2>';
        echo '<h2 class="text_propos">';
       	echo '<img id="phid" src="'.$data['image'].'">';
		echo $data['text'];
        echo '</h2>';
		echo '<h2 class="text_propos">#Team SISR !</h2>';
		echo '<div class="barre"></div>';
   		?>
    	
</body>

	<footer>
		<div class="footer_boite_align">
		<?php
		echo '<marquee>'.$footer["copyright"].'</marquee>';
		
		?>
	</footer>
</div>
</html>		
        

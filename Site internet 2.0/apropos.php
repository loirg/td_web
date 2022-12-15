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
		$data=yaml_parse_file('apropos.yaml');
        /*print_r($data);*/
        echo '<p class="Nom">'.$data['propos'].'</p>';
        echo '<p class="nom_propos">'.$data['nom'].'</p>';
        echo '<h2>'.$data['accroche'].'</h2>';
        echo '<div class="proposimg">';
        echo '<h2>';
        echo '<img id="phid" src="'.$data['image'].'">';
        echo $data['text'];
        echo '</h2>';
        echo '</div>';
    ?>
    </div>
</body>
			
        
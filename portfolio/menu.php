<?php

$menu=yaml_parse_file('menu.yaml');
?>

<ul class="menu">
    <div class="ver"></div>
    <?php
    foreach($menu['menu'] AS $fichier=>$onglet){
        echo'<li><a href="'.$fichier.'.php">'.$onglet.'</a></li>';
    }
    
    ?>	
    <div class="ver"></div>
   
    <?php
    foreach($menu['réseaux'] AS $nom=>$tab){
        echo '<a class="icn" target="_blank" href="'.$tab['url'].'"><img src="'.$tab['icone'].'" /></a>';
    }
    ?>
    </ul>
    

    


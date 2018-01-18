<?php 
$tab = ['team'=>'Les guignoles de\'info'];

$content_tab = json_encode($tab);

var_dump($content_tab);

// Nom du fichier à créer
$fic = 'nom.json';

// Ouverture du fichier
$fic = fopen($fic, 'w+');

// Ecriture dans le fichier
fwrite($fic, $content_tab);

// Fermeture du fichier
fclose($fic);
?>
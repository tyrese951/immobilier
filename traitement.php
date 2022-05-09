<?php

$PDO = new PDO('mysql:host=localhost;dbname=immobilier','root','');


//type et description  etant des mots clé donc je les'ecris autrements
$Stat = $PDO->prepare('INSERT INTO utilisateur VALUES (NULL, :titre, :adresse, :ville, :cp, :surface, :prix, :photo,  :typee, :descriptif, )');


$Stat->bindValue(':titre', $titre, PDO::PARAM_STR);

$Stat->bindValue(':adresse', $adresse, PDO::PARAM_STR);

$Stat->bindValue(':ville', $ville, PDO::PARAM_STR);

$Stat->bindValue(':cp', $cp, PDO::PARAM_INT);

$Stat->bindValue(':surface', $surface, PDO::PARAM_INT);

$Stat->bindValue(':prix', $cprix, PDO::PARAM_INT);

$Stat->bindValue(':photo', $photo, PDO::PARAM_STR);

$Stat->bindValue(':typee', $typee, PDO::PARAM_STR);

$Stat->bindValue(':descriptif', $descriptif, PDO::PARAM_STR);
















?>
?>
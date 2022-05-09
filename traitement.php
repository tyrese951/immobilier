<?php


$PDO = new PDO('mysql:host=localhost;dbname=immobilier','root','');
$titre = $_POST['titre']; 
$adresse = $_POST['adresse']; 
$ville = $_POST['ville']; 
$cp = $_POST['cp']; 
$surface = $_POST['surface']; 
$prix = $_POST['prix']; 
$photo = $_POST['photo']; 
$type = $_POST['typee']; 
$descriptif = $_POST['descriptif'];



//type et description  etant des mots clé donc je les ai'ecris autrements
$Stat = $PDO->prepare('INSERT INTO logement VALUES (NULL, :titre, :adresse, :ville, :cp, :surface, :prix, :photo,  :typee, :descriptif, )');






$Stat->bindValue(':titre', $titre, PDO::PARAM_STR);

$Stat->bindValue(':adresse', $adresse, PDO::PARAM_STR);

$Stat->bindValue(':ville', $ville, PDO::PARAM_STR);

$Stat->bindValue(':cp', $cp, PDO::PARAM_INT);

$Stat->bindValue(':surface', $surface, PDO::PARAM_INT);

$Stat->bindValue(':prix', $cprix, PDO::PARAM_INT);

$Stat->bindValue(':photo', $photo, PDO::PARAM_STR);

$Stat->bindValue(':typee', $typee, PDO::PARAM_STR);

$Stat->bindValue(':descriptif', $descriptif, PDO::PARAM_STR);

$Stat->execute();











?>

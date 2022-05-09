<?php

$bdd = new PDO('mysql:host=localhost;dbname=immobilier', "root", "");

$req  = $bdd->prepare("SELECT * FROM logement"); // la requete pour tout recuperer (SELECT *) de la table logement (FROM)
$req->execute(); 
$logements = $req->fetchAll(PDO::FETCH_ASSOC);
$req->closeCursor();







?>


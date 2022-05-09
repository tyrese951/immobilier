<?php require_once "repoData.php";

//--------------------------------------------  READ -------------------------------------------------//



$bdd = new PDO('mysql:host=localhost;dbname=immobilier', "root", ""); // connexion à la BDD



$prix = ""; // recupére du formulaire

$req  = $bdd->prepare("SELECT * FROM logement WHERE possesseur=:prix"); // la requete 

$req->bindValue('username', $prix, PDO::PARAM_STR); // PDO pour une double secrite avant d'envoyer les données à la BDD.

$req->execute(); // envoi et exécution en BDD 


$logement = $req->fetchAll(PDO::FETCH_ASSOC); // Recupere les datas de la req on met dans un tableau

// FETCH_ASSOC= Récuperer les informations en tableau associatid

$req->closeCursor(); // coupe la connection avec la bdd 

//var_dump($myGames); // verifie qu'on a bien notre resultat !

?> -->








<!DOCTYPE html>
<html lang="FR">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>immobilier</title>
</head>
<body>
<body>




 


       
</body>
</html>
<?php require_once "./partials/header.php"?>


<!DOCTYPE html>
<html>
    <head>
        <title>immobolier</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="formulaire.css">
    </head>
    <body>
        <div class="container text-center">
        <h1>Formulaire d'inscription</h1>


        <form>
  <div class="form-group">
    <label for="id">Logement</label>
    <input type="text" class="form-control" id="id" placeholder="Type du logement">
  </div>
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="Titre" placeholder="Titre du logement">
  </div>
</form>

<div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="text" class="form-control" id="adresse" placeholder="Taper votre adresse">
  </div>

  <div class="form-group">
    <label for="CP">CP</label>
    <input type="text" class="form-control" id="CP" placeholder="Taper votre code postal">
  </div>

  <div class="form-group">
    <label for="Surface">Surface</label>
    <input type="text" class="form-control" id="surface" placeholder="Volume habitable">
  </div>

  <div class="form-group">
    <label for="Prix">Prix</label>
    <input type="text" class="form-control" id="Prix" placeholder="Prix du bien">
  </div>

  <div class="form-group">
    <label for="Prix">Prix</label>
    <input type="text" class="form-control" id="Prix" placeholder="Prix du bien">
  </div>




  <div class="form-group">
    <label for="description">description</label>
    <input type="text" class="form-control" id="description" placeholder="Volume habitable">
  </div>




        <form action="xss.php" method="post">
           

           

            <form name="fo" method="post" action="" enctype="multipart/form-data" >
        <input type="file"name="image"><br>
            <div class="c100" id="submit">

            <div class="c100">
                <label for="Type">Type  :</label>
                <input type="radio" name="Genre" value="location"> location
                <input type="radio" name="Genre" value="achat"> achat<br>
            </div>
            
            </div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
        </div>
        
    </body>
</html>
<?php require_once "database.php";






?>


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

    <main class="container">

     <h1 class="p-4 my-5 bg-dark text-danger text-center"> Formulaire d'inscription</h1>


        <table class="table table-hover text-center">
            <thead class="bg-info">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">titre</th>
                    <th scope="col">adresse</th>
                    <th scope="col">ville</th>
                    <th scope="col">cp</th>
                    <th scope="col">surface</th>
                    <th scope="col">prix</th>
                    <th scope="col">photo</th>
                    <th scope="col">type</th>
                    <th scope="col">description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logements as $logement) : ?>
                    <tr class="table">
                        <td> <?= $logement['ID'] ?></td>
                        <td> <?= $logement['titre'] ?></td>
                        <td> <?= $logement['adresse'] ?></td>
                        <td> <?= $logement['ville'] ?></td>
                        <td> <?= $logement['cp'] ?></td>
                        <td> <?= $logement['surface'] ?></td>
                        <td> <?= $logement['prix'] ?></td>
                        <td> <?= $logement['photo'] ?></td>
                        <td> <?= $logement['type'] ?></td>
                        <td> <?= $logement['description'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </main>

</body>





 


       

</html>
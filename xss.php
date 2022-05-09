<!DOCTYPE html>
<html>
    <head>
        <title>immobolier</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="formulaire.css">
    </head>
    <body>
        <h1>Formulaire d'inscription</h1>
        
        <form action="xss.php" method="post">
            <div class="c100">
                <label for="id">logement: </label>
                <input type="text" id="logement" name="adresse" style="width:30em">
            </div>
            <div class="c100">
                <label for="titre">titre  :</label>
                <input type="text" id="titre" name="titre" style="width:30em">
            </div>
            <div class="c100">
                <label for="adresse">adresse  :</label>
                <input type="text" id="text" name="ville" style="width:30em">
            </div>
            <div class="c100">
                <label for="code-postal">code-postal : </label>
                <input type="number" id="code-postal" name="code-postal" min="6" max="99">
            </div>
            <div class="c100">
                <label for="surface">surface/m² : </label>
                <input type="number" id="surface" name="surface">
            </div>
            <div class="c100">
                <label for="prix">prix €: </label>
                <input type="number" id="surface" name="surface">
            </div>

            <form name="fo" method="post" action="" enctype="multipart/form-data" >
        <input type="file"name="image"><br>
         <input type="submit" name="valider" value="Télecharger" /> 
            <div class="c100" id="submit">

            <div class="c100">
                <label for="type">type  :</label>
                <input type="radio" name="Genre" value="location"> location
                <input type="radio" name="Genre" value="achat"> achat<br>
            </div>
            
            <div class="c100">
                <label for="description">description  :</label><br>
                <!-- <input type="textarea" > -->
                <input type="textarea" id="name" name="name" required
                    minlength="10" maxlength="600" size="10" style="width:30em">
            </div>
           
            
        
            </div>
                <input type="submit" value="Envoyer">
            </div>
        </form>
        
        
    </body>
</html>
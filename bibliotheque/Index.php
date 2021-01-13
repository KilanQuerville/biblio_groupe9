<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="biblio/Index.css">
</head>
    <body>
    <title>La Baguette magique</title>
    <a href="baguettemagique.php">
    <h1 id="image"><img src="Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
    <h2>Bienvenue sur notre bibliothèque La baguette magique</h2>
    <?php
    require "nav.php"
    ?>
    <?php
    $link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        
        
        $req = "SELECT * FROM livre JOIN editeur  ON editeur.id=livre.editeur
        JOIN auteur ON auteur.idLivre=livre.isbn JOIN personne ON personne.id=auteur.idPersonne WHERE idRole = 1;";
        
         
        $result = mysqli_query($link,$req);
        //var_dump($result);
        
    
        if($result){
            while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                    ?><div><a href=<?php echo "./Redirection/" . $row["isbn"] . ".php"?>>
          <div class=zoom><img src=<?php echo "(../../Imgbiblio/" . $row["isbn"] . ".jpg"?> alt="Harry Potter"></div></a><?php

                    echo "<p>Nom : " . $row["nom"] . "</p>";
                    echo "<p>Prenom : " . $row["prenom"] . "</p>";
                    echo "<p>libelle : " . $row["libelle"] . "</p>";
                    echo "<p>Titre : " . $row["titre"] . "</p>";
                    echo "<p>Isbn : " . $row["isbn"] . "</p>";
                    echo "<p>Date de publication : " . $row["annee"] . "</p>";
            }
            mysqli_free_result($result);

        }mysqli_close($link);
                ?></div>
    <p>Dans cette bibliothèque,vous trouverez les ouvrages des différentes oeuvres d'Harry Potter et des Animaux Fantastiques écrites par l'écrivaine J.K Rowling.</p>
    <p>Voici la liste des dix oeuvres que J.K Rowling a écrites ci-dessous:</p>

          
        
          
    <a href="https://wizardingworld.warnerbros.fr/store/baguette-magique-d-albus-dumbledore-avec-boite-ollivander.html"><p>Surtout,n'oubliez pas que c'est la baguette qui choisit le sorcier</p></a>

        </body>
</html>

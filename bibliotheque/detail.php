<!DOCTYPE html>
<html>

<?php
$link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        if(!mysqli_set_charset($link,"utf8mb4")){
            echo mysqli_error($link);
            exit();
        }
        

        if(isset($_GET["isbn"])){
        $req = "SELECT  * FROM livre  JOIN editeur  ON editeur.id=livre.editeur
        JOIN auteur ON auteur.idLivre=livre.isbn  JOIN personne ON personne.id=auteur.idPersonne  WHERE isbn = ".$_GET["isbn"];

$result = mysqli_query($link,$req);

if($result){
    require "biblio.php";
    while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){

          ?>
          
              <body>
              <a href="Index.php">
    <h1 id="image"><img  class="logo" src="Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
              
                  <img src="Imgbiblio/<?php echo $row["isbn"]?>.jpg" width="200" height="300"p style="float: left;"><?php echo $row["resume"];echo "<br>";?></p></img>
                  </img>
    
                  <?php       
echo "<br>";
        echo "<p> Isbn:". $row["isbn"] . "</p>" ;
        echo " <p> - Titre:" . $row["titre"] . "</p>";
        echo " <p> -Editeur:" . $row["libelle"] . "</p>" ;
        echo " <p> -Annee:" . $row["annee"] . "</p>";
        echo " <p> -Genre:" . $row["genre"] . "</p>" ;
        echo " <p> -nbpages:" . $row["nbpages"] . "</p>";
        

            }
            
        }
       
        ?>
   
    
            
        <?php }else{
           $req="SELECT  * FROM livre  JOIN editeur  ON editeur.id=livre.editeur
          JOIN auteur ON auteur.idLivre=livre.isbn  JOIN personne ON personne.id=auteur.idPersonne WHERE idRole=1 ORDER BY isbn;";
        
        $result = mysqli_query($link,$req);
        if($result){
            ?><head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="biblio/Index.css">
</head>

    <title>La Baguette magique</title>
    <a href="baguettemagique.php">
    <h1 id="image"><img  class="logo" src="Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
    <h2>Bienvenue sur notre bibliothèque La baguette magique</h2>
    
    <?php
    require "nav.php";
    ?>
    <p>Dans cette bibliothèque,vous trouverez les ouvrages des différentes oeuvres d'Harry Potter et des Animaux Fantastiques écrites par l'écrivaine J.K Rowling.</p>
    <p>Voici la liste des dix oeuvres que J.K Rowling a écrites ci-dessous:</p>

            <?php while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                    ?><div><a href=<?php echo "?isbn=" . $row["isbn"] . ".php"?>>
          <div class=zoom><img src=<?php echo "(../../Imgbiblio/" . $row["isbn"] . ".jpg"?> alt="Harry Potter"></div></a><?php

                    echo "<p>Nom : " . $row["nom"] . "</p>";
                    echo "<p>Prenom : " . $row["prenom"] . "</p>";
                    echo "<p>libelle : " . $row["libelle"] . "</p>";
                    echo "<p>Titre : " . $row["titre"] . "</p>";
                    echo "<p>Isbn : " . $row["isbn"] . "</p>";
                    echo "<p>Date de publication : " . $row["annee"] . "</p>";
                    echo "</div>";
            }

        }}mysqli_close($link);
                ?>
    
          
        
          
    

        </body>
</html>
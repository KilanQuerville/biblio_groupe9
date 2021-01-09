<?php
require "biblio.php"
?>
    <body>

        <a href="Index.php">
            <h1 id="image"><img src="Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
            
        <img src="Imgbiblio/tome1animauxfant.png" width="200" height="300" p style="float: left;">Il est rare qu'une maison de sorciers ne compte pas dans sa bibliothèque un exemplaire des "Animaux fantastiques". Désormais et pour une période limitée dans le temps, les Moldus vont avoir à leur tour la possibilité d'apprendre où vit le Quintaped, ce que mange le Puffskein et pourquoi il vaut mieux ne pas laisser dans le jardin une soucoupe de lait destinée à un Knarl…</p>
        
        <?php
        
        $link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        
        
        $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn= 9782075121385   AND livre.editeur=editeur.id JOIN genre ON livre.isbn=9782075121385  AND livre.genre=genre.id   ;";
         
        $result = mysqli_query($link,$req);
        //var_dump($result);
        
    
        if($result){
            while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                
        echo "<p>Isbn:" . $row["isbn"] ;
        echo " - Titre:" . $row["titre"] ;
        echo " - Editeur:" . $row["libelle"] ;
        echo " - Annee:" . $row["annee"] ;
        echo " - Genre:" . $row["genre"] ;
        echo " - Nbpages:" . $row["nbpages"] . "</p>";
            }
            
        }
        ?>
            
    </body>
</html>

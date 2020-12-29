<?php
require "biblio.php"
?>
    <body>
        
        <a href="Index.php">
            <h1 id="image"><img src="Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
            
        <img src="Imgbiblio/tome6.jpg"alt="tome 6" width="200" height="285" p style="float:left;">Dans un monde de plus en plus inquiétant, Harry se prépare à retrouver Ron et Hermione. Bientôt, ce sera la rentrée à Poudlard, avec les autres étudiants de sixième année. Mais pourquoi Dumbledore vient-il en personne chercher Harry chez les Dursley ? Dans quels extraordinaires voyages au cœur de la mémoire va-t-il l'entraîner ?</p>
       
        <?php
        
        $link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        
        
        $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn= 9782070585229  AND livre.editeur=editeur.id JOIN genre ON livre.isbn=9782070585229  AND livre.genre=genre.id   ;";
         
         
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

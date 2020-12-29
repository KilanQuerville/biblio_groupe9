<?php
require "biblio.php"
?>
        <body>
            <a href="Index.php">
                <h1 id="image"><img src="Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
                
            <img src="Imgbiblio/quidditch.jpg" p style="float: left;">Les règles du jeu, l'apparition du Vif d'or, l'évolution des balais, les équipes mythiques du monde entier et les matchs qui ont fait l'histoire : «Le Quidditch à travers les âges» est un ouvrage incontournable de la Bibliothèque de Poudlard.

            Les droits d'auteur de ce livre seront reversés à l'organisation caritative anglaise Comic Relief qui utilisera les sommes recueillies pour améliorer et changer des vies,une action encore plus importante et plus extraordinaire que la capture du Vif d'or en trois secondes et demie par Roderick Plumpton en 1921.</p>
            <?php
        
        $link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        
        
        $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn= 9782070625178   AND livre.editeur=editeur.id JOIN genre ON livre.isbn=9782070625178  AND livre.genre=genre.id   ;";
         
         
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

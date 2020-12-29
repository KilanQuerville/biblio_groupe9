<?php
require "biblio.php"
?>
    <body>
        <a href="Index.php">
            <h1 id="image"><img src="Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
            
        <img src="Imgbiblio/tome4.JPG"alt="tome 4" width="250" height="385" p style="float: left;">Harry Potter a quatorze ans et entre en quatrième année au collège de Poudlard. Une grande nouvelle attend Harry, Ron et Hermione à leur arrivée : la tenue d’un tournoi de magie exceptionnel entre les plus célèbres écoles de sorcellerie. Déjà les délégations étrangères font leur entrée. Harry se réjouit… Trop vite. Il va se trouver plongé au cœur des événements les plus dramatiques qu’il ait jamais eu à affronter.

        Bernard Giraudeau met son humour et son talent d’acteur au service du best-seller de J. K. Rowling. Une voix chaude et familière pour vivre ou revivre en «direct» les célèbres aventures du jeune sorcier...</p>
        
            <?php
        
        $link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        
        
        $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782070585205   AND livre.editeur=editeur.id JOIN genre ON livre.isbn=9782070585205  AND livre.genre=genre.id   ;";
         
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

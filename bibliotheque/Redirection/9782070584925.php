<?php
require "../biblio.php"
?>
        <body>
            <a href="../Index.php">
                <h1 id="image"><img src="../Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
                
            <img src="../Imgbiblio/9782070584925.jpg" width="250"height="400" p style="float:left;">Harry Potter a treize ans. Après des vacances insupportables chez les horribles Dursley, il retrouve ses fidèles amis, Ron et Hermione, pour prendre le train qui les ramène au collège Poudlard. Le monde des gens ordinaires, les Moldus, comme celui des sorciers, est en émoi : aux dernières nouvelles, Sirius Black, un dangereux criminel proche de Voldemort, s'est échappé de la prison d'Azkaban. Les redoutables gardiens de la prison assureront la sécurité du collège Poudlard, car le prisonnier évadé recherche Harry Potter, responsable de l'élimination de son maître. C'est donc sous bonne garde que l'apprenti sorcier fait sa troisième rentrée. Au programme : des cours de divination, la fabrication d'une potion de ratatinage, le dressage des hippogriffes... Mais Harry est-il vraiment à l'abri du danger qui le menace?</p>
            
            
       
        <?php
        
        $link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        
        
        $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782070584925  AND livre.editeur=editeur.id JOIN genre ON livre.isbn=9782070584925 AND livre.genre=genre.id   ;";
         
         
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

<?php
require "../biblio.php"
?>
    <body>
        <a href="../Index.php">
            <h1 id="image"><img src="../Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
            
        <img src="../Imgbiblio/9782070584642.jpg"alt="tome 2" width="170"height="230" p style="float:left;">
        Harry Potter fait une deuxième rentrée fracassante en voiture volante à l'école des sorciers. Cette deuxième année ne s'annonce pas de tout repos... surtout depuis qu'une étrange malédiction s'est abattue sur les élèves. Entre les cours de potion magique, les matchs de Quidditch et les combats de mauvais sorts, Harry trouvera-t-il le temps de percer le mystère de la Chambre des Secrets?
            Un livre magique pour sorciers et sorcières confirmés!</p>
            
        <?php
        
        $link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        
        
        $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782070584642  AND livre.editeur=editeur.id JOIN genre ON livre.isbn=9782070584642 AND livre.genre=genre.id   ;";
         
         
        $result = mysqli_query($link,$req);
        //var_dump($result);
        
    
        if($result){
            while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                
        echo "<p> Isbn:" . $row["isbn"] ;
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

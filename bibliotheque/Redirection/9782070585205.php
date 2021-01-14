<?php
require "../biblio.php"
?>
    <body>
        <a href="../Index.php">
            <h1 id="image"><img src="../Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
    
        <img src="../Imgbiblio/9782070585205.jpg"width="200" height="300"p style="float: left;">Potter est orphelin. Il mène une vie bien monotone chez son oncle et sa tante et leur horrible fils. Le jour de ses onze ans, son existence bascule : un géant vient le chercher pour l'emmener dans une école de sorciers où une place l'attend depuis toujours. Quel mystère entoure sa naissance? Et qui est l'effroyable mage dont personne n'aime prononcer le nom? Harry intègre le collège Poudlard et s'y plaît aussitôt. Voler à cheval sur des balais, jeter des sorts, devenir champion de Quidditch (une sorte de football pour sorciers), combattre les trolls: Harry Potter se révèle un sorcier vraiment doué. Il semble pourtant que tout le monde ne l'apprécie pas...</p></img>
        </img>
        
    <?php
        
        $link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        
        
        $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn= 9782070585205 AND livre.editeur=editeur.id JOIN genre ON livre.isbn=9782070585205 AND livre.genre=genre.id   ;";
         
        $result = mysqli_query($link,$req);
        //var_dump($result);
        
    
        if($result){
            while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                
        echo "<p> Isbn:". $row["isbn"]  ;
        echo " - Titre:" . $row["titre"] ;
        echo " - Editeur:" . $row["libelle"] ;
        echo " - Annee:" . $row["annee"] ;
        echo " - Genre:" . $row["genre"] ;
        echo " - nbpages:" . $row["nbpages"] . "</p>";
        

            }
            
        }
       
        ?>
   
    
            
    </body>
</html>

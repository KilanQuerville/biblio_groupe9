<?php
require "biblio.php"
?>
    <body>
        <a href="Index.php">
            <h1 id="image"><img src="Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
            
        <img src="Imgbiblio/tome7.jpg" p style="float: left;"> Cette année, Harry a dix-sept ans et ne retourne pas à Poudlard. Avec Ron et Hermione, il se consacre à la dernière mission confiée par Dumbledore. Mais le Seigneur des Ténèbres règne en maître. Traqués, les trois fidèles amis sont contraints à la clandestinité. D'épreuves en révélations, le courage, les choix et les sacrifices de Harry seront déterminants dans la lutte contre les forces du Mal.

        Découvrez le dernier tome des aventures de Harry Potter, lu avec talent par Dominique Collignon-Maurin. Le comédien prête à chaque personnage une voix propre. Un magnifique jeu d'acteur!</p>
     
        <?php
        
        $link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        
        
   $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=  9782070615360  AND livre.editeur=editeur.id JOIN genre ON livre.isbn= 9782070615360  AND livre.genre=genre.id   ;";
         
         
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

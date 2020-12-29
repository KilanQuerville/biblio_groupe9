<?php
require "biblio.php"
?>
        <body>
            <a href="Index.php">
                <h1 id="image"><img src="Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
                
            <img src="Imgbiblio/tome5.jpg"alt="tome 5" width="170" height="230" p style="float:left;">À quinze ans, Harry entre en cinquième année à Poudlard, mais il n’a jamais été si anxieux. L’adolescence, la perspective des examens et ces étranges cauchemars… Car Celui-Dont-On-Ne-Doit-Pas-Prononcer-Le-Nom est de retour. Le ministère de la Magie semble ne pas prendre cette menace au sérieux, contrairement à Dumbledore. La résistance s’organise alors autour de Harry qui va devoir compter sur le courage et la fidélité de ses amis de toujours…</p>
           
        <?php
        
        $link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        
        
        $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn= 9782070585212  AND livre.editeur=editeur.id JOIN genre ON livre.isbn=9782070585212  AND livre.genre=genre.id   ;";
         
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

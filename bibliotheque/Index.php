<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="biblio/Index.css">
</head>
    <body>
    <title>La Baguette magique</title>
    <a href="baguettemagique.php">
    <h1 id="image"><img src="Imgbiblio/logo.jpg" alt="baguette magique"height="230" width="1980"></img></h1></a>
    <h2>Bienvenue sur notre bibliothèque La baguette magique</h2>
    <?php
    require "nav.php"
    ?>
    <?php
    $link = mysqli_connect("localhost","root","","bibliotheque");
        if(!$link){
            echo "Erreur : Impossible de se connecter à MySQL.".PHP_EOL;
            echo "Errno de débogage :".mysqli_connect_errno(). PHP_EOL;
            echo "Erreur de débogage :".mysqli_connect_erreur().PHP_EOL;
            exit;
        }
        
        
        $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782070584628    AND livre.editeur=editeur.id   ;";
        
         
        $result = mysqli_query($link,$req);
        //var_dump($result);
        
    
        if($result){
            while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                ?>
    <p>Dans cette bibliothèque,vous trouverez les ouvrages des différentes oeuvres d'Harry Potter et des Animaux Fantastiques écrites par l'écrivaine J.K Rowling.</p>
    <p>Voici la liste des dix oeuvres que J.K Rowling a écrites ci-dessous:</p>

          <div>
        <?php
           echo "<a href=" .$row["isbn"] . "><img src=" . $row["image"] . "></img></a>";
?>

    <?php
            }
        }
?>
<?php
$req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782070584642    AND livre.editeur=editeur.id   ;";
        
         
        $result = mysqli_query($link,$req);
        //var_dump($result);
        
    
        if($result){
            while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                

               echo "<a href=" .$row["isbn"] . "><img src=". $row["image"] . "></img></a>";
            }}
    ?>
    <?php
    $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782070584925   AND livre.editeur=editeur.id   ;";
            
             
            $result = mysqli_query($link,$req);
            //var_dump($result);
            
        
            if($result){
                while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                    
    
                   echo "<a href=" .$row["isbn"] . "><img src=". $row["image"] . "></img></a>";
                }}
        ?>
        <?php
        $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782070585205   AND livre.editeur=editeur.id   ;";
                
                 
                $result = mysqli_query($link,$req);
                //var_dump($result);
                
            
                if($result){
                    while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                        
        
                       echo "<a href=" .$row["isbn"] . "><img src=". $row["image"] . "></img></a>";
                    }}
            ?>
            <?php
            $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782070585212   AND livre.editeur=editeur.id   ;";
                    
                     
                    $result = mysqli_query($link,$req);
                    //var_dump($result);
                    
                
                    if($result){
                        while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                            
            
                           echo "<a href=" .$row["isbn"] . "><img src=". $row["image"] . "></img></a>";
                        }}
                ?>
                <?php
                $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782070585229   AND livre.editeur=editeur.id   ;";
                        
                         
                        $result = mysqli_query($link,$req);
                        //var_dump($result);
                        
                    
                        if($result){
                            while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                                
                
                               echo "<a href=" .$row["isbn"] . "><img src=". $row["image"] . "></img></a>";
                            }}
                    ?>
                    <?php
                    $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782070615360   AND livre.editeur=editeur.id   ;";
                            
                             
                            $result = mysqli_query($link,$req);
                            //var_dump($result);
                            
                        
                            if($result){
                                while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                                    
                    
                                   echo "<a href=" .$row["isbn"] . "><img src=". $row["image"] . "></img></a>";
                                }}
                        ?>
                        <?php
                        $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782075121385   AND livre.editeur=editeur.id   ;";
                                
                                 
                                $result = mysqli_query($link,$req);
                                //var_dump($result);
                                
                            
                                if($result){
                                    while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                                        
                        
                                       echo "<a href=" .$row["isbn"] . "><img src=". $row["image"] . "></img></a>";
                                    }}
                            ?>
                            <?php
                            $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782075110709   AND livre.editeur=editeur.id   ;";
                                    
                                     
                                    $result = mysqli_query($link,$req);
                                    //var_dump($result);
                                    
                                
                                    if($result){
                                        while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                                            
                            
                                           echo "<a href=" .$row["isbn"] . "><img src=". $row["image"] . "></img></a>";
                                        }}
                                ?>
                                <?php
                                $req = " SELECT * FROM `livre`   JOIN editeur ON  livre.isbn=9782070625178   AND livre.editeur=editeur.id   ;";
                                        
                                         
                                        $result = mysqli_query($link,$req);
                                        //var_dump($result);
                                        
                                    
                                        if($result){
                                            while($row = mysqli_fetch_array ($result,MYSQLI_ASSOC)){
                                                
                                
                                               echo "<a href=" .$row["isbn"] . "><img src=". $row["image"] . "></img></a>";
                                            }}
                                    ?>
        
          </div>
    <a href="https://wizardingworld.warnerbros.fr/store/baguette-magique-d-albus-dumbledore-avec-boite-ollivander.html"><p>Surtout,n'oubliez pas que c'est la baguette qui choisit le sorcier</p></a>

        </body>
</html>

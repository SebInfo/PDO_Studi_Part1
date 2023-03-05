<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
        $dsn = "mysql:host=127.0.0.1;port=8889;dbname=FILMS";
        $user = "root";
        $pass = "root"; 
        try {
            $bdd = new PDO ($dsn,$user,$pass);
        }
        catch(PDOException $e) {
            echo "Le code erreur est : ".$e->getCode();
            echo "<br>Le message : ".$e->getMessage();
            echo "<br>Le fichier : ".$e->getFile();
        }
        $req="SELECT nom, prenom FROM acteur";
        foreach($bdd->query($req) as $acteur)
        {
            echo $acteur['nom'].' '.$acteur['prenom']."<br />";
        }
        // Fermeture de la connexion
        $bdd = null;
    ?>
  </body>
</html>
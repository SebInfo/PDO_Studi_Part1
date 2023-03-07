<html>
  <head>
    <title>PHP Requete avec while</title>
  </head>
  <body>
    <h1>Requête avec la boucle while</h1>
    <?php 
        require_once 'login.php';
        try {
            $bdd = new PDO($dsn, $user, $pass, $opt);
        }
        catch(PDOException $e) {
            echo "Le code erreur est : ".$e->getCode();
            echo "<br>Le message : ".$e->getMessage();
            echo "<br>Le fichier : ".$e->getFile();
        }

        $req="SELECT nom, prenom FROM acteur";
        $result = $bdd->query($req);
        while($acteur= $result->fetch())
        {
            echo $acteur['nom'].' '.$acteur['prenom']."<br />";
        }
        // Fermeture de la connexion
        $bdd = null;
    ?>
  </body>
</html>
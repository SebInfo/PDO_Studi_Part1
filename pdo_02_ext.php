<html>
  <head>
    <title>PHP Connexion à la BDD avec PDO avec le fichier login.php</title>
  </head>
  <body>
    <h1>PHP Connexion à la BDD avec PDO en utilisant le fichier login.php</h1>
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
    ?>
  </body>
</html>
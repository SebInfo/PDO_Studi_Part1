<html>
  <head>
    <title>PHP Connexion à la BDD avec PDO</title>
  </head>
  <body>
    <h1>PHP Connexion à la BDD avec PDO</h1>
    <?php 
        $dsn = "mysql:host=127.0.0.1;port=8889;dbname=FILMSS";
        $user = "root";
        $pass = "root"; 
        try {
            $bdd = new PDO ($dsn,$user,$pass);
            echo "coucou"; // test 
        }
        catch(PDOException $e) {
            echo "Le code erreur est : ".$e->getCode();
            echo "<br>Le message : ".$e->getMessage();
            echo "<br>Le fichier : ".$e->getFile();
        }
    ?>
  </body>
</html>
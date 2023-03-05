<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
        $dsn = "mysql:host=127.0.0.1;port=8889;dbname=FILMSS";
        $user = "root";
        $pass = "root"; 
        try {
            $bdd = new PDO ($dsn,$user,$pass);
            echo "coucou";
        }
        catch(PDOException $e) {
            echo "Le code erreur est : ".$e->getCode();
            echo "<br>Le message : ".$e->getMessage();
            echo "<br>Le fichier : ".$e->getFile();
        }
    ?>
  </body>
</html>
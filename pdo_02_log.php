<html>
  <head>
    <title>PHP Connexion à la BDD PDO</title>
  </head>
  <body>
    <h1>Connexion et journalisation des erreurs</h1>
    <?php 
        $dsn = "mysql:host=127.0.0.1;port=8889;dbname=FILMSS";
        $user = "root";
        $pass = "roote"; 
        try {
            $bdd = new PDO ($dsn,$user,$pass);
            echo "coucou";
        }
        catch(PDOException $e) {
            $errorMessage = date('l jS \of F Y h:i:s A ');
            $errorMessage .= " Le code erreur est : ".$e->getCode();
            $errorMessage .= " Le message : ".$e->getMessage();
            $errorMessage .= " Le fichier : ".$e->getFile();
            $errorMessage .= "\n";
            // Chemin du fichier log
            $logFile = "./logs/errors.log";
            // Chemin du fichier accès non autorisé 
            $logFileAccess = "./logs/access.log";
            // Enregistrement du message d'erreur dans le fichier log
            error_log($errorMessage, 3, $logFile);
            if ($e->getCode() == 1045)
            {
                error_log($errorMessage, 3, $logFileAccess);
            }
        }
    ?>
  </body>
</html>